<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Doctors;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class adminController extends Controller
{
    public function dashboard()
    {
        $doctors = Doctors::all(); // Fetch all doctors
        $totalDoctors = Doctors::count();
        $patients = User::all();
        $totalPatients = User::count();
        $totalAppointments = Appointment::count();
        $appointments = Appointment::with('doctor')->get();
        $patients = User::with('appointments')->get();
        $totalFee = $appointments->sum(function ($appointment) {
            return $appointment->doctor->doc_fee;
        });
        return view('admin.Dashboard', compact('totalDoctors','totalPatients', 'totalAppointments','doctors','appointments','patients','totalFee'));
    }

    public function viewAppointments()
    {
        //...
        $appointments = Appointment::all();
        return view('admin.appointmentDash', ['appointments' => $appointments]);
    }

    public function manageDoctors()
    {
        $doctors = Doctors::all(); // Fetch all doctors
        return view('admin.doctor-list', ['doctors' => $doctors]);
    }

    public function viewPatient()
    {
        $patients = User::with('appointments')->get();
        return view('admin.patient-list', ['patients' => $patients]);
    }


    public function updateStatus(Request $request)
    {
        $appointment = Appointment::find($request->id);
        $appointment->status = $request->status;
        $appointment->save();

        return response()->json(['success' => 'Status updated successfully']);
    }
}
