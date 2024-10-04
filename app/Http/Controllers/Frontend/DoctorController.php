<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctors;
use Illuminate\Http\Request;
use Auth;

class DoctorController extends Controller
{
    public function index()
    {
        // Fetch only doctors whose status is 1 (enabled)
        $doctors = Doctors::with('hospital','city')->where('status',1)->get();
        
        // dd($doctors);
        // $doctors = Doctors::where('status', 1)->get();
        return view('frontend.Doctor', ['doctors' => $doctors]);
    }

    public function updateStatus(Request $request)
    {
        $doctor = Doctors::find($request->id);
        if ($doctor) {
            $doctor->status = $request->status;
            $doctor->save();

            return response()->json(['success' => 'Status updated successfully']);
        }

        return response()->json(['error' => 'Doctor not found'], 404);
    }
}
