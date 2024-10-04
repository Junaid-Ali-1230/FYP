<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Under Review</title>
    <style>
        @import "compass/css3";

        html, body {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .container {
            width: 200px; /* Larger width */
            height: 400px; /* Larger height */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            border: 2px solid black;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9; /* Added background color for better visibility */
        }

        .clock {
            position: relative;
            width: 50px;
            height: 50px;
            border-radius: 30px;
            border: solid 5px black;
            margin-top: 20px; /* Space between top of container and clock */

            .hours {
                position: absolute;
                width: 50px;
                height: 5px;
                top: 22.5px;
                -webkit-animation: you-spin-me-round-round-baby-right-round 5s linear 0s infinite;
                &:before {
                    content: "";
                    height: 5px;
                    width: 16px;
                    position: absolute;
                    right: 11px;
                    background: black;
                    border-radius: 5px;
                }
            }

            .minutes {
                position: absolute;
                width: 50px;
                height: 5px;
                top: 22.5px;
                -webkit-animation: you-spin-me-round-round-baby-right-round 0.41s linear 0s infinite;

                &:before {
                    content: "";
                    height: 5px;
                    width: 22px;
                    position: absolute;
                    right: 5px;
                    background: black;
                    border-radius: 5px;
                }
            }
        }

        @-webkit-keyframes you-spin-me-round-round-baby-right-round {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        .wait-text {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }

        .go-back {
            margin-bottom: 20px; /* Space between link button and bottom of container */
            text-decoration: none;
            padding: 10px 20px;
            background-color: #32CD32;
            color: white;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        .go-back:hover {
            background-color: #00ff6b;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="clock">
            <div class="minutes"></div>
            <div class="hours"></div>
        </div>
        <div class="wait-text">
            Your profile is currently under review.<br>
            Once your documents have been reviewed by the admin, your profile will be approved.<br>
            Please check back later.
        </div>

       
        <a  href="{{url('doctor/login')}}" class="go-back">Go Back</a>
    </div>
</body>
</html>
