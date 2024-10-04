<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctors;
use Illuminate\Http\Request;

class BookAppointmentController extends Controller
{

        public function index($id)
    {
        // $doctors = Doctors::findOrFail($id);

        // dd(auth()->user()->name);
        if (auth()->user() != null) {
            $booked = Appointment::select('appointment_time')->where('doctor_id',$id)->pluck('appointment_time')->toArray();

            // $doctor = Doctors::where('id',$id)->first();
            // $start_time = $doctor->start_time . 'AM';
            // $end_time = $doctor->end_time . 'PM';
            // $start = new \DateTime($start_time);
            // $end = new \DateTime($end_time);

            // // Calculate 30-minute intervals
            // $interval = new \DateInterval('PT30M');
            // $period = new \DatePeriod($start, $interval, $end);
            // // dd($period);
            // // Store intervals in an array
            // $time_slots = [];
            // foreach ($period as $dt) {
            //     $time_slots[] = $dt->format('H:i');
            // }

            $doctor = Doctors::where('id',$id)->first();
            $start_time = $doctor->start_time ;
            $end_time = $doctor->end_time ;
            $start_period = substr($start_time, -2); // Extract AM/PM
            $end_period = substr($end_time, -2); // Extract AM/PM
            $start_time = substr($start_time, 0, -2); // Remove AM/PM
            $end_time = substr($end_time, 0, -2); // Remove AM/PM

            $start = new \DateTime($start_time . $start_period);
            $end = new \DateTime($end_time . $end_period);

            // Calculate 30-minute intervals
            $interval = new \DateInterval('PT30M');
            $period = new \DatePeriod($start, $interval, $end);

            // Store intervals in an array
            $time_slots = [];
            foreach ($period as $dt) {
                // Adjust time format based on AM/PM
                $format = 'h:i A';
                if ($dt->format('A') != $start_period) {
                    $format = 'h:i A';
                }
                $time_slots[] = $dt->format($format);
            }


            // $time_slots = array_diff($time_slots,$booked);
            // dd($time_slots);
            return view('frontend.reservation',compact('doctor','time_slots','doctor'));
        } else {
            return redirect('/login')->with('message', 'Please login first')->with('redirectTo', 'frontend.reservation');
        }



    }

    public function fetch_time(Request $request){

        $booked = Appointment::select('appointment_time')->where('doctor_id',$request->doctor_id)
                        ->where('appointment_day',$request->day)
                        ->pluck('appointment_time')->toArray();

                        // dump($booked);
            $doctor = Doctors::where('id',$request->doctor_id)->first();
            $start_time = $doctor->start_time ;
            $end_time = $doctor->end_time ;
            $start_period = substr($start_time, -2); // Extract AM/PM
            $end_period = substr($end_time, -2); // Extract AM/PM
            $start_time = substr($start_time, 0, -2); // Remove AM/PM
            $end_time = substr($end_time, 0, -2); // Remove AM/PM

            $start = new \DateTime($start_time . $start_period);
            $end = new \DateTime($end_time . $end_period);

            // Calculate 30-minute intervals
            $interval = new \DateInterval('PT30M');
            $period = new \DatePeriod($start, $interval, $end);
            // dump($period);
            // Store intervals in an array
            $time_slots = [];
            foreach ($period as $dt) {
                // Adjust time format based on AM/PM
                $format = 'h:i A';
                if ($dt->format('A') != $start_period) {
                    $format = 'h:i A';
                }
                $time_slots[] = $dt->format($format);
            }
            $time_slots = array_diff($time_slots,$booked);
            // dd($time_slots);
            return response()->json($time_slots);
            // $time_slots = array_diff($time_slotss,$booked);
            // dd($time_slots);/
    }


    public function save_appointment(Request $request){
        // dd($request->all());
        $doctor_id = $request->doctor_id;
        $patient_id = auth()->user()->id;
        $appointment_date = $request->Date;
        $appointment_time = $request->time;
        $hosital_id = $request->hospital_id;
        $phone_number = $request->phone;

        Appointment::create([
            'doctor_id' => $doctor_id,
            'patient_id' => $patient_id,
            'appointment_day' => $appointment_date,
            'appointment_time'=>$appointment_time ,
            'hospital_id' => $hosital_id,
            'phone_number'=> $phone_number,
            'status'=> 'pending',
        ]);
        return redirect()->route('home');
    }

}
