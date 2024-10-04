<?php

namespace App\Models;

use Database\Seeders\HospitalSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;

class Doctors extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guard='doctor';
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'phone_no',
        'doc_speciality',
        'doc_experties',
        'years_of_experience',
        'doc_degree',
        'doc_university',
        'regis_city',
        'regis_hospital',
        'availability_day',
        'start_time',
        'end_time',
        'profile_pic',
        'document_pic',
        'wait_time',
        'doc_fee',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function hospital()
{
    return $this->belongsTo(Hospitals::class, 'regis_hospital', 'hospital_id');
}

public function city()
{
    return $this->belongsTo(City::class, 'regis_city');
}

public function appointments()
    {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }
    
}
