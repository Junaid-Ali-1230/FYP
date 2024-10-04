<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Doctors;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use DB;

class DoctorsideController extends Controller
{

    public function Logout(){
        Auth::guard('doctor')->logout();
        return redirect()->route('login_from')->with('error','Doctor Logout Successfully');
    }
    public function Appointments()
    {
        $feeCharged= Auth::guard('doctor')->user()->doc_fee;
        $doctor = Auth::guard('doctor')->user();
        $doctorId = $doctor->id;
        $appointments = Appointment::where('doctor_id', $doctorId)->get();
        $profile_pic=Auth::guard('doctor')->user()->profile_pic;


        // Pass appointments data to the view
        return view('docauth.appointments', compact('appointments', 'profile_pic', 'feeCharged'));

    }




    public function Index()
    {
        return view('docauth.doclogin');
    }

    public function Profile()
    {
        $doctor = Auth::guard('doctor')->user();
        $doctorId = $doctor->id;
        $appointments = Appointment::where('doctor_id', $doctorId)->get();
        $patients = User::all();
        $profile_pic=Auth::guard('doctor')->user()->profile_pic;
        $doctorName = $doctor->name;
        return view('docauth.docprofile',compact('profile_pic','appointments','patients','doctorName'));
    }

    public function Login(Request $request)
    {
        //dd($request->all());
        $check = $request->all();
        if (
            Auth::guard('doctor')->attempt([
                'email' => $check['email1'],
                'password' => $check['password']
            ])
        ) {
            return redirect()->route('doctor.docprofile')->with('error', 'Doctor login successfully');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }


    } //end method


    public function getHospital(Request $request)
    {
        // $cid=$request->post('cid');
        // $hospital=DB::table('hospitals')->where('id',$cid)->orderBy('hospitals_name','asc')->get();
        // $html='   <option value="">Select Hospital</option>';
        // foreach($hospital as $list){
        // 	$html.='<option value="'.$list->id.'">'.$list->hospital_name.'</option>';
        // }
        // echo $html;

        $cid = $request->post('cid');
        $hospital = DB::table('hospitals')->where('id', $cid)->orderBy('hospital_name', 'asc')->get();
        $html = '<option value="">Select Hospital</option>';
        foreach ($hospital as $list) {
            $html .= '<option value="' . $list->hospital_id . '">' . $list->hospital_name . '</option>';
        }
        echo $html;
    }

    public function Signup()
    {
        $city_list = DB::table('city')
            ->groupBy('city')
            ->get();
        return view('docauth.docregister')->with('city_list', $city_list);
    }

    public function DoctorRegisterCreate(Request $request)
    {
        //    dd($request->start_time);

        $time = $request->start_time;

        // Split hours and minutes
        $parts = explode(':', $time);

        // Parse hours and minutes
        $hours = (int)$parts[0];
        $minutes = (int)$parts[1];

        // Convert hours to 12-hour format
        $ampm = $hours >= 12 ? 'PM' : 'AM';
        $hours = $hours % 12;
        $hours = $hours ? $hours : 12; // Set 12 for midnight

        // Form the formatted time string
        $formatted_time = sprintf("%02d:%02d %s", $hours, $minutes, $ampm);

        $end_time = $request->end_time;

        // Split hours and minutes
        $parts = explode(':', $end_time);

        // Parse hours and minutes
        $hours = (int)$parts[0];
        $minutes = (int)$parts[1];

        // Convert hours to 12-hour format
        $ampm = $hours >= 12 ? 'PM' : 'AM';
        $hours = $hours % 12;
        $hours = $hours ? $hours : 12; // Set 12 for midnight

        // Form the formatted time string
        $formatted_time2 = sprintf("%02d:%02d %s", $hours, $minutes, $ampm);

        // dd($formatted_time,$formatted_time2);

        $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email',
                'password' => 'required|string|min:8', // Minimum length of 8 characters
                'phone_no' => 'required|string|max:11',
                'doc_speciality' => 'required|string',
                'doc_experties' => 'required|string',
                'years_of_experience' => 'required|integer',
                'doc_degree' => 'required|string',
                'doc_university' => 'required|string',
                'regis_city' => 'required|string',
                'regis_hospital' => 'required|string',
                'availability_day' => 'required',
                'start_time' => 'required', // Assuming time is stored as a string
                'end_time' => 'required', // Assuming time is stored as a string
                'profile_pic' => 'required', // or 'required|file' if it's an uploaded file
                'document_pic' => 'required',
                'wait_time' => 'required',
                'doc_fee' => 'required|integer',



            ]
        );

        if ($request->has('profile_pic')) {
            $file = $request->file('profile_pic');
            $extension = $file->getClientOriginalExtension();

            $filename_profile = time() . '.' . $extension;

            $path = 'uploads/';
            $file->move($path, $filename_profile);
        }

        if ($request->has('document_pic')) {
            $file = $request->file('document_pic');
            $extension = $file->getClientOriginalExtension();

            $filename_document = time() . '.' . $extension;

            $path = 'uploads/';
            $file->move($path, $filename_document);
        }

        $availability_days = implode(',', $request->availability_day);
        Doctors::insert([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
            'phone_no' => $request->phone_no,
            'doc_speciality' => $request->doc_speciality,
            'years_of_experience' => $request->years_of_experience,
            'doc_degree' => $request->doc_degree,
            'doc_university' => $request->doc_university,
            'regis_city' => $request->regis_city,
            'regis_hospital' => $request->regis_hospital,
            'availability_day' => $availability_days,
            'start_time' => $formatted_time,
            'end_time' => $formatted_time2,
            'wait_time' => $request->wait_time,

            'profile_pic' => $path . $filename_profile,
            'document_pic' => $path . $filename_document,
            'doc_fee' => $request->doc_fee,



        ]);


        return redirect()->route('login_from')->with('error', 'Details submitted, login to check you profile status if approved or not');
    }

    // function fetch(Request $request)
    // {

    //  $select = $request->get('select');
    //  $value = $request->get('value');
    //  $dependent = $request->get('dependent');
    //  $data = DB::table('hospitals')
    //    ->where($select, $value)
    //    ->groupBy($dependent)
    //    ->get();
    //  $output = '<option value="">Select '.ucfirst($dependent).'</option>';
    //  foreach($data as $row)
    //  {
    //   $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
    //  }
    //  echo $output;
    // }
    public function NotApproved()
    {
        return view('docauth.not_approved');
    }
    public function updateStatus(Request $request)
    {
        $appointment = Appointment::find($request->id);
        $appointment->status = $request->status;
        $appointment->save();

        return response()->json(['success' => 'Status updated successfully']);
    }
}
