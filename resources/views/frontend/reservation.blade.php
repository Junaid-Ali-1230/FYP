@extends('frontend.Layout.main')

@section('main-container')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Booking</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Flag icons CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <!-- Include jQuery (required for Chosen or Select2) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include Chosen or Select2 library for the dropdown -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>


    <style>
        /* body {
            margin: 0;
            padding: 0;
            color: black;
            /* Centers the container horizontally */
            margin-top: 50px;
            /* Adds margin from the top */
            background-color: rgb(180, 213, 247);
            /* justify-content: center; */
        } */

        .container {
            width: 60%;
            display: flex;
            flex-direction: column;
        }

        .sub-container {
            display: flex;
            /* flex-direction: */
            justify-content: center;
            background-color: white;
            padding: 11px 0px;
            border-radius: 10px;
        }

        .profilePic {
            flex: 1;
            /* Takes up 1/3 of the container width */
            display: flex;
            justify-content: center;
            /* Centers content horizontally */
            align-items: center;
            /* Centers content vertically */
            /* border: 1px solid red */
        }

        .profilePic img {
            /* Adjust size as needed */
            width: 100px;
            /* Adjust size as needed */
            height: 100px;
            /* Applies border radius */
            border-radius: 50%;
            /* adding border */
            border: 4px solid blue;
        }

        .doctorInfo {
            flex: 3;
            /* Takes up 2/3 of the container width */
            display: flex;
            flex-direction: column;
            /* Arranges children vertically */
        }

        .doctorInfo div {
            margin-bottom: 10px;
            /* Adds margin between divs */
        }

        .doctorName {
            font-weight: bold;
            /* Makes text bold */
            font-size: 27px;
            /* Increases font size */
        }

        .clinicAddress {
            /* Styles for clinic address */
        }

        .doctorFee {
            font-weight: bold;
            /* Makes text bold */
        }

        .bg-marham-light {
            background-color: #eef4f6;
            border-radius: 8px;
            padding-bottom: 10px;
        }

        .pt-10 {
            padding-top: 1.5rem;
        }

        h2 {
            font-size: 1.7rem;
            line-height: 1.25;
            font-weight: 600;
        }

        .text-blue {
            color: #0227a1;
        }

        .col-12 {
            flex: 0 0 auto;
            width: 100%;
        }

        .img-content {
            display: flex;
            align-items: center;
        }

        .mt-10 {
            margin-top: 1rem;
        }

        .img-content {
            display: flex;
            align-items: center;
        }

        .text-bold {
            font-weight: 600;
        }

        .cursor-pointer {
            cursor: pointer;
        }

        .product-card {
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 10px 15px;
            background-color: #fff;
        }

        .mr-10 {
            margin-right: 10px !important;
        }

        .mt-10 {
            margin-top: 1rem;
        }

        .bg-white {
            background-color: #fff;
            border-radius: 8px;
        }

        .col-12 {
            flex: 0 0 auto;
            width: 100%;
        }

        .col-6 {
            flex: 0 0 auto;
            width: 50%;
        }

        .text-underline {
            text-decoration: underline;
            cursor: hand;
        }

        .text-bold {
            font-weight: 600;
        }

        .text-sm {
            font-size: 1.3rem;
        }

        .font-size-12 {
            font-size: 12px;
        }

        .mb-0 {
            margin-bottom: 0px !important;
        }

        .element {
            font-size: 8px;
        }

        .font-size-12 {
            font-size: 12px;
        }

        .slot {
            width: 100%;
            border: 1px solid #bdbdbd;
            border-radius: 5px;
            background-color: white;
            height: 33px;
            font-size: 13px;
            font-weight: 501;
            font-family: revert;
            padding-left: 15px;
        }

        .mb-10 {
            margin-bottom: 1rem;
        }

        .text-orange {
            color: #e65300 !important;
        }

        .button,
        button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"] {
            background-color: #014e78;
            border: 0.1rem solid #014e78;
            border-radius: .4rem;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 1.4rem;
            height: 3.8rem;
            letter-spacing: .1rem;
            line-height: 3.8rem;
            padding: 0 1.0rem;
            text-align: center;
            text-decoration: none;
            white-space: nowrap;
            font-family: 'Poppins', sans-serif;
        }

        .justify-content-center {
            justify-content: center !important;
        }

        .bg-marham-light {
            background-color: #eef4f6;
            border-radius: 8px;
            padding-bottom: 10px;
        }



        .phone-input-container {
            display: flex;
            align-items: center;
        }

        .dropdown {
            margin-right: 10px;
        }

        .phone-number {
            flex-grow: 1;
        }

        .flag-icon {
            width: 24px;
            height: auto;
        }

        .button-block {
            width: 100%;
        }

        .mt-20 {
            margin-top: 2rem;
        }

        /* CSS for the hover effect */
        .hover-border {
            transition: border-color 0.3s ease;
            /* Smooth transition for the border color change */
        }

        /* CSS for the hover state */
        .hover-border:hover {
            border-color: blue;
            /* Change the border color on hover */
        }

        /* MEDIA QUERIES */
        @media (max-width: 768px) {
            .container {
                width: 80%;

            }

            @media (max-width: 520px) {
                .container {
                    width: 100%;

                }
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class=" row sub-container">


            <div class="profilePic">
                <img src="{{ asset($doctor->profile_pic) }}" alt="Doctor's Profile Pic">
            </div>
            <div class="doctorInfo">
                <div class="doctorName">{{ $doctor->name }}</div>
                <div class="doctorName">{{ $doctor->hospital->hospital_name }}</div>
                <div class="clinicAddress">{{ $doctor->city->city }}</div>
                <div class="doctorFee">Rs. {{ number_format($doctor->doc_fee) }}</div>
            </div>


        <div class="row justify-content-center">
            <section class="mt-4 bg-marham-light">
                <h2 class="pt-10" style="text-align: center;">Get <span class="text-blue">Confirmed</span> Appointment
                    Online</h2>
                <div class="col-12">
                </div>
                <div class="">
                    <div class="img-content mt-10">
                        <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" fill="#000000" width="24px"
                            height="24px" viewBox="-1 0 19 19">
                            <path
                                d="M16.417 9.6A7.917 7.917 0 1 1 8.5 1.683 7.917 7.917 0 0 1 16.417 9.6zm-5.431 2.113H8.309l1.519-1.353q.223-.203.43-.412a2.974 2.974 0 0 0 .371-.449 2.105 2.105 0 0 0 .255-.523 2.037 2.037 0 0 0 .093-.635 1.89 1.89 0 0 0-.2-.889 1.853 1.853 0 0 0-.532-.63 2.295 2.295 0 0 0-.76-.37 3.226 3.226 0 0 0-.88-.12 2.854 2.854 0 0 0-.912.144 2.373 2.373 0 0 0-.764.42 2.31 2.31 0 0 0-.55.666 2.34 2.34 0 0 0-.274.89l1.491.204a1.234 1.234 0 0 1 .292-.717.893.893 0 0 1 1.227-.056.76.76 0 0 1 .222.568 1.002 1.002 0 0 1-.148.536 2.42 2.42 0 0 1-.389.472L6.244 11.77v1.295h4.742z">
                            </path>
                        </svg>
                        <span class="text-bold"> Select Date &amp; Time </span>
                    </div>
                    <form id="booking_form" method="POST" action="{{ route('save.appointment') }}"  class="row mt-10">
                        @csrf
                        <input type="hidden" name="doctor_id" class="doctor_id" value="{{$doctor->id}}">
                        <input type="hidden" name="hospital_id" value="{{$doctor->regis_hospital}}">
                        <div class="col-12" style="display: none; margin-bottom: 3px;" id="error_message">
                            <div id="sub_error_message"
                                style="width: 100%; background-color: rgb(242, 145, 145); text-align: center; padding: 2px 0;">
                            </div>
                        </div>
                        <div class="col-6">
                            @php

                               $days = explode(',', $doctor->availability_day);

                            @endphp
                            <select id="days_slots" class="slot" name="Date" required>
                                <option value="">Select Day</option>
                                @foreach ($days as $day)
                                <option value="{{$day}}">{{ucwords($day)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <select id="time_slots" class="slot" name="time" required>
                                <option value="">Select Time</option> 
                                 @foreach ($time_slots as $time_slot)
                                <option value="{{$time_slot}}">{{($time_slot)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 mt-10">
                            {{-- <input class="slot" type="text" name="phone" placeholder="Enter phone number" required> --}}
                            <input class="slot" type="text" name="phone" title="Error Message!! Enter 10 Digit Number" placeholder="Enter phone number" required pattern="[1-9]{1}[0-9]{9}">
                        </div>


                        <div id="physical-booking-text" class="col-12" style="display: none;">
                            <p class="text-bold text-orange">Book now and get contact details and address location
                                in
                                SMS.
                            </p>
                        </div>
                        <div class="col-12">
                            <input class="button button-primary button-block mt-20" data-hospital-name=""
                                data-hospital-id="" id="book_now" value="Book Consultation" type="submit">
                        </div>
                    </form>
                </div>
            </section>
        </div>

    </div>


</body>

</html>


<script>
            $(document).ready(function () {
                $('#days_slots').on('change', function () {
                    var doctor_id = $('.doctor_id').val();
                    var day = $(this).val();

                    $.ajax({
                        url: "{{route('fetch_time')}}",
                        type: "POST",
                        data: {
                            day: day,
                            doctor_id: doctor_id,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                        success: function (result) {
                            $("#time_slots").html('<option value="">Select Time</option>');
                            console.log(result.length);
                            if(result.length == 0){
                                alert('All Slots Are Booked');

                            }
                            else{
                                $.each(result, function (key, value) {
                                $("#time_slots").append('<option value="' + value
                                     + '">' + value + '</option>');
                            });
                            }

                        }
                    });
                });
            });

    </script>
@endsection
