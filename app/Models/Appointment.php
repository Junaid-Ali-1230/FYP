<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_id',
        'patient_id',
        'appointment_date',
        'hospital_id',
        'phone_number',
        'status',
        'appointment_day',
        'appointment_time'
    ];

    public function patient(){
        return $this->belongsTo(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctors::class, 'doctor_id');
    }

    public function patients()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }
    public function patient_names(){
        return $this->belongsTo(User::class,'patient_id','id');
    }
    public function hospital_names(){
        return $this->belongsTo(Hospitals::class,'hospital_id','hospital_id');
    }


}
