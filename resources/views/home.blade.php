@extends('layouts.app')

@section('content')

<style>
    .container {
        margin-top: 50px;
    }

    .profile-box {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .profile-box-header {
        background-color: #f9f9f9;
        border-bottom: 1px solid #ddd;
        padding: 15px 20px;
        border-radius: 8px 8px 0 0;
        text-align: center; /* Center the header text */
    }

    .profile-box-header h2 {
        margin: 0;
        font-size: 22px;
        color: #333;
    }

    .profile-table {
        width: 100%;
        border-collapse: collapse;
        margin: auto; /* Center the table */
    }

    .profile-table th,
    .profile-table td {
        padding: 12px 20px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    .profile-table th {
        background-color: #f9f9f9;
        text-align: center; /* Center header text */
    }

    .profile-table td {
        text-align: center; /* Center table cell text */
    }
</style>


<div class="profile-box">
    <div class="profile-box-header">
        <h2>Patient Profile</h2>
    </div>
    <table class="table table-striped profile-table">
        <tr>
            <th>Name</th>
            <td>{{auth()->user()->name}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ auth()->user()->email }}</td>
        </tr>

    </table>
</div>

<div class="profile-box">
    <div class="profile-box-header">
        <h2>Appointment Details</h2>
    </div>
    <table id="example" class="table table-striped profile-table">
        <thead>
            <tr>
                <th>Doctor</th>
                <th>Hospital</th>
                <th>Appointment Day</th>
                <th>Appointment Time</th>
                <th>Phone_Number</th>
                <th>Fee</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $detail)
            <tr>
                <td>{{ $detail->doctor->name }}</td>
                <td>{{ $detail->hospital_names->hospital_name }}</td>
                <td>{{$detail->appointment_day}}</td>
                <td>{{$detail->appointment_time}}</td>
                 <td>{{ $detail->phone_number}}</td>
                <td>{{$detail->doctor->doc_fee}}</td>
                <td>{{ $detail->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
