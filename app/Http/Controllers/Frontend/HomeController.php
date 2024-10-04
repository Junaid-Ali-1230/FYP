<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctors;

class HomeController extends Controller
{
    public function index()
    {
        // Retrieve all doctors from the database
    $doctors = Doctors::all();

    // Shuffle the collection and take the first 4 doctors
    $randomDoctors = $doctors->shuffle()->take(4);
        return view('frontend.index', compact('randomDoctors'));
    }
}
