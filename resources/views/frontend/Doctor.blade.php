@extends('frontend.Layout.main')

@section('main-container')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Profile Card</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
/* Add any additional CSS styles you need */

        .profile-card {
            display: flex;
            /* align-items: center; */
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            font-family: Arial, sans-serif;
            /* border:2px solid red; */

        }

        .profile-card img {
            border-radius: 50%;
            /* Round shape */
            width: 100px;
            /* Width of the image */
            height: 100px;
            /* Height of the image to match the width */
            object-fit: cover;
            /*This will cover the area without stretching the image */
            margin-right: 20px;
        }

        .profile-details {
            /* border:2px solid red; */
            flex-grow: 1;
            padding-left: 20px
        }

        .profile-name {
            color: #333;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .profile-info {
            color: #666;
            margin-bottom: 5px;
            /* border:2px solid green; display:flex; flex-direction: row; */
        }

        .profile-info span {
            font-weight: bold;
        }

        .profile-actions {
            text-align: right;
            /* border:1px solid green; */
        }

        .profile-button {
            background-color: #f0ad4e;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin: 0 5px;
            cursor: pointer;
        }

        .profile-button:hover {
            background-color: #ec971f;
        }

        .profile-verified {
            color: #337ab7;
            font-weight: bold;
            margin-left: 20px;
            position: relative;
            left: 89.5%;
            top: -20px;
            background-color: #bfd4f5;
            width: 110px;
            align-items: center;
            justify-content: center;
            padding-left: 5px;

        }

        .marginborder-right {
            margin-right: 20px;
            border-right: 1px solid #cfcfcf;
            padding-right: 10px;
            /* border-radius: 10px */
        }

        .consultation-card {
            margin-top: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .consultation-card h5 {
            font-size: 1rem;
            font-weight: bold;
        }

        .consultation-card .card-body {
            padding: 15px;
        }

        .btn-consultation {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-consultation:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .consultation-card {
                margin-bottom: 10px;
            }
        }

        .blinking-circle {
            height: 10px;
            width: 10px;
            background-color: #00ff00;
            /* Green color */
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
            animation: blinkingAnimation 1.5s infinite;
        }

        @keyframes blinkingAnimation {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        @foreach($doctors as $doctor)
        <div class="profile-card" style="display:flex; flex-direction:column">
            <!-- This is div-1, that contains everything except consultation cards -->
            <div class="profile-verified">PMC Verified</div>
            <div style="display:flex; flex-direction:row">
                <!-- Dynamically loading the doctor's profile picture -->
                <img src="{{ asset($doctor->profile_pic) }}" alt="Doctor's Profile Pic">

                <div class="profile-details">
                    <div class="profile-name">{{ $doctor->name }}</div>
                    <div class="profile-info">{{ $doctor->doc_speciality }}</div>
                    <div class="profile-info">{{ $doctor->doc_degree }}, {{ $doctor->doc_university }}</div>
                    <div style="display:flex; flex-direction: row;">
                        <div class="profile-info marginborder-right">
                            <span>Under {{ $doctor->wait_time }} Min</span>
                            <div>Wait Time</div>
                        </div>
                        <div class="profile-info marginborder-right">
                            <span>{{ $doctor->years_of_experience }} years</span>
                            <div>Experience</div>
                        </div>
                        <div class="profile-info">
                            <span>98% (1013)</span>
                            <div>Satisfied Customers</div>
                        </div>
                    </div>
                </div>

                <div class="profile-actions">
                    <button class="profile-button">
                        {{-- <a href="{{ url('/BookAppointment') }}">Book Appointment</a> --}}
                        <a href="{{ url('BookAppointment', $doctor->id) }}">Book Appointment</a>

                    </button>
                </div>
            </div>

            <!-- Consultation cards -->
            <div class="row" style="display:flex; flex-direction:row;">
                <div class="col-md-4 col-sm-12">
                    <div class="card consultation-card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa-solid fa-location-dot"></i> {{ $doctor->hospital->hospital_name }} ({{ $doctor->city->city }})</h5>
                            <p><span class="blinking-circle"></span>{{ ucwords(str_replace(',', ' & ', $doctor->availability_day)) }}  ({{ $doctor->start_time }} - {{ $doctor->end_time }})</p>
                            <p>{{ $doctor->doc_fee }} </p> <!-- Assuming you have a fee field -->
                            <a href="#" class="btn btn-consultation">Pay Online & Get Rs. 200 OFF</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


</body>




</html>

@endsection
