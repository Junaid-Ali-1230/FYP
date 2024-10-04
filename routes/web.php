<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\DoctorController;
use App\Http\Controllers\Frontend\HospitalController;
use App\Http\Controllers\Frontend\BookAppointmentController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\HealthBlogController;
use App\Http\Controllers\Frontend\ImmuneSystemController;


use App\Http\Controllers\DoctorsideController;
use Illuminate\Http\Request;
use App\Http\Controllers\adminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix('doctor')->group(function (){

Route::get('/login',[DoctorsideController::class,'Index'])->name('login_from');

Route::post('/login/owner',[DoctorsideController::class,'Login'])->name('doctor.login');

Route::get('/profile',[DoctorsideController::class,'Profile'])->name('doctor.docprofile')->middleware('doctor');

Route::get('/signup',[DoctorsideController::class,'Signup'])->name('doctor.signup');

Route::post('/signup/create',[DoctorsideController::class,'DoctorRegisterCreate'])->name('doctor.signup.create');

Route::get('/profile/not_approved',[DoctorsideController::class,'NotApproved'])->name('doctor.not_approved');

Route::get('/profile/appointments',[DoctorsideController::class,'Appointments'])->name('doctor.appointments');

Route::get('/profile/logout',[DoctorsideController::class,'Logout'])->name('doctor.logout');
Route::post('/appointment/update-status', [DoctorsideController::class, 'updateStatus'])->name('appointment.updateStatus');
Route::post('/appointment/update-status', [adminController::class, 'updateStatus'])->name('appointment.updateStatus');
//Route::post('/appointment/update-status', [App\Http\Controllers\HomeController::class, 'updateStatus'])->name('appointment.updateStatus');
});

Route::post('/getState', [DoctorsideController::class,'getHospital']);


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors');
Route::post('/doctor/update-status', [DoctorController::class, 'updateStatus'])->name('doctor.updateStatus');

Route::post('/doctor/update-status', [DoctorController::class, 'updateStatus'])->name('doctor.updateStatus');

Route::get('/BookAppointment/{id}', [BookAppointmentController::class, 'index'])->name('book.appointment');
Route::post('/SaveAppointment', [BookAppointmentController::class, 'save_appointment'])->name('save.appointment');
Route::get('/Health-Blogs', [HealthBlogController::class, 'index'])->name('health.blogs');
Route::get('/BoostImmunity', [ImmuneSystemController::class, 'index'])->name('boost.immunity');

Route::post('/fetch_time', [BookAppointmentController::class, 'fetch_time'])->name('fetch_time');



Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth','verified');



    // Admin Dashboard
    Route::get('/admin-dashboard', [adminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth','admin');

    // View Appointments
    Route::get('/admin-appointments', [adminController::class, 'viewAppointments'])->name('admin.appointments')->middleware('auth','admin');

    // Manage Doctors
    Route::get('/admin-doctors', [adminController::class, 'manageDoctors'])->name('admin.doctors')->middleware('auth','admin');

    Route::get('/admin-patient', [adminController::class, 'viewpatient'])->name('admin.patient')->middleware('auth','admin');

