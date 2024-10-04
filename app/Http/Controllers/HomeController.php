<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;
use App\Models\Doctors;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard based on user type.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): \Illuminate\Contracts\Support\Renderable
    {
        $usertype = Auth::user()->usertype;

        if ($usertype === 'user') {
            $userID = Auth::id();
            $details = Appointment::with('patient','hospital_names','doctor')->where('patient_id', $userID)->get();

            return view('home', compact('details'));

            // return view('home');
        } elseif ($usertype === 'admin') {
            $doctors = Doctors::where('status', 1)->get();
            // $doctors = Doctors::all(); // Fetch all doctors
            $patients = User::all();
            // $appointments = Appointment::all();
            $totalDoctors = Doctors::all()->count();
            $totalPatients = User::all()->count();
            $totalAppointments = Appointment::all()->count();
            $appointments = Appointment::with('doctor')->get();
            // dd();
            $totalFee = $appointments->sum(function ($appointment) {
                return $appointment->doctor->doc_fee;
            });
        return view('admin.Dashboard', compact('totalDoctors', 'totalPatients', 'totalAppointments','doctors','patients','appointments','totalFee'));

        } else {
            return redirect()->back();
        }
    }

}
