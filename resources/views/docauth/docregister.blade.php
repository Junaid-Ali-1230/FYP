<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="doc_regis.css">


    <title>Document</title>


</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <form action="{{route('doctor.signup.create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3 border-right" id="prof_section">

                    <div class="d-flex flex-column align-items-center text-center p-3 "><span class="font-weight-bold"
                            id="upload_text">Upload Your Professional Photo</span><img class="rounded-circle mt-2"
                            width="150px" id="profile_pic"
                            src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    </div>
                    <label for="input_file" id="upload">Upload Photo</label>
                    <input type="file" accept="image/jpg, image/jpeg, image/png, image/webp " id="input_file"
                        name="profile_pic">
                    <span class="text-danger">
                        @error('')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Create your new account as a doctor</h4>
                        </div>
                        <!-- <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" placeholder="enter full name" value=""></div>

                    </div> -->
                        <div class="row mt-3">


                            <div class="col-md-12 mb-3"><label class="labels" for="letters1">Select Speciality</label>
                                <select class="col-md-12 form-control" id="letters1" name="doc_speciality">
                                    <option value="Cardiology">Cardiology</option>
                                    <option value="Dermatologist">Dermatologist</option>
                                    <option value="Gynecologist">Gynecologist</option>
                                    <option value="Urologist">Urologist</option>
                                    <option value="Gastroenterologist">Gastroenterologist</option>
                                    <option value="Neurologist">Neurologist</option>
                                    <option value="Psychiatrist">Psychiatrist</option>
                                    <option value="Pediatrician">Pediatrician</option>
                                    <option value="Dentist">Dentist</option>
                                    <option value="Sexologist">Sexologist</option>
                                </select>
                            </div>

                            <!-- <div class="col-md-12"><label class="labels" for="letters2">Select Catagory</label><select
                                class="col-md-12 form-control" id="letters2" name="letters">
                                <option value="a">E</option>
                                <option value="b">F</option>
                                <option value="c">G</option>
                                <option value="d">H</option>
                                <option value="e">I</option>
                            </select></div> -->
                            <div class="col-md-12 mb-2">
                                <label class="labels">Enter Your Experties</label>
                                <input type="text" class="form-control" placeholder="enter your Experties/Mastery"
                                    value="" name="doc_experties">
                                <span class="text-danger">
                                    @error('doc_experties')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>

                            <label for="input_qualification_file" id="upload-document">Upload image of orignal
                                documents</label>
                            <input type="file" accept="image/jpg, image/jpeg, image/png" id="input_qualification_file"
                                name="document_pic">
                            <span class="text-danger">
                                @error('document_pic')
                                    {{$message}}
                                @enderror
                            </span>

                            <!-- <form action="/submit-form" method="post">
                            <label for="letters">Select a letter:</label>
                            <select id="letters" name="letters">
                              <option value="a">A</option>
                              <option value="b">B</option>
                              <option value="c">C</option>
                              <option value="d">D</option>
                              <option value="e">E</option>
                            </select>
                            <input type="submit" value="Submit">
                          </form> -->
                            <h8 style="padding-top: 5px; color: rgb(83, 83, 83);"
                                class="text-left mt-3 text-primary text-center h6">Your Qualification
                            </h8>



                            <div class="col-md-12">
                                <label class="labels">Degree</label>
                                <input type="text" class="form-control" placeholder="enter your degree" value=""
                                    name="doc_degree">
                                <span class="text-danger">
                                    @error('doc_degree')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-12"><label class="labels">University</label><input type="text"
                                    class="form-control" placeholder="enter your University/college" value=""
                                    name="doc_university">
                                <span class="text-danger">
                                    @error('doc_university')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>


                            <h8 style="padding-top: 5px; color: rgb(83, 83, 83)grey;"
                                class="text-left mt-3 text-primary text-center h6">Your Practices
                            </h8>


                            <div class="col-md-12">
                                <label class="labels" for="city">Select City</label>
                                <select name="regis_city" id="city" class="col-md-12  form-control input-lg dynamic"
                                    data-dependent="hospital_name">
                                    <!-- <option value="">Select Country</option> -->
                                    @foreach($city_list as $city)
                                        <option value="{{ $city->id}}">{{ $city->city }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label class="labels" for="hospital_name">Select Hospital</label>
                                <select name="regis_hospital" id="hospital_name"
                                    class="col-md-12 form-control input-lg ">
                                    <option value="">Select Hospital</option>
                                </select>

                            </div>


                            <div class="mt-2 text-center  text-primary mb-3 h6">Select days and time slot</div>


                            <select id="day" name="availability_day[]" class="col-md-12 form-control input-lg"
                                multiple="multiple">
                                <option value="mon">Mon</option>
                                <option value="tue">Tue</option>
                                <option value="wed">Wed</option>
                                <option value="thu">Thu</option>
                                <option value="fri">Fri</option>
                                <option value="sat">Sat</option>
                                <option value="sun">Sun</option>
                            </select><br><br>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mt-2 " for="stime">select start time</label>
                                    <input class="mt-1 col-md-6" type="time" id="stime_t2" name="start_time"
                                        class="form-control" required>
                                    <span class="text-danger">
                                        @error('start_time')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-md-6">
                                    <label class="mt-2" for="etime">select end time</label>
                                    <input class="mt-1" type="time" id="etime" name="end_time" class="form-control"
                                        required>
                                    <span class="text-danger">
                                        @error('end_time')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>


                                <div class="col-md-12"><label class="labels">enter waiting time</label><input
                                        type="text" class="form-control" placeholder="10 to 15 minutes" value=""
                                        name="wait_time">
                                    <span class="text-danger">
                                        @error('wait_time')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>

                            </div>
                            <div class="mt-3 text-primary h6  text-center ">Your signing in details </div>
                            <div class="col-12 mt-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="enter your name" required>
                                    <span class="text-danger">
                                        @error('name')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    <label for="name" class="form-label">Enter your name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="phone_no" id="name"
                                        placeholder="03170000000" required>
                                    <span class="text-danger">
                                        @error('phone_no')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    <label for="name" class="form-label">enter your phone no.</label>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="name@example.com" required>
                                    <span class="text-danger">
                                        @error('email')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    <label for="email" class="form-label">Email</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Password" required>
                                    <span class="text-danger">
                                        @error('password')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    <label for="password" class="form-label">Password</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="confirm_password"
                                        id="confirmPassword" onkeyup="validatePassword()" placeholder="Password"
                                        required>
                                    <span class="text-danger">
                                        @error('confirm_password')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    <label for="confirmPassword" class="form-label">Confirm Your password
                                        Password</label>
                                </div>
                            </div>
                            <span id="message"></span><br>



                        </div>

                        <div class="col-12">
                            <div class="d-grid my-3">
                                <button class="btn btn-primary btn-lg" type="submit" id="submitBtn">Submit</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="m-0 text-secondary text-center">Already have an account? <a
                                    href="{{route('login_from')}}" class="link-primary text-decoration-none">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center"><span class=" text-primary h6">
                                Experience</span><span class="border px-3 p-1 add-experience"><i
                                    class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                        <div class="col-md-12"><label class="labels"> Enter Years of Experience</label><input
                                type="number" class="form-control" placeholder="experience" value=""
                                name="years_of_experience">
                            <span class="text-danger">
                                @error('years_of_experience')
                                    {{$message}}
                                @enderror
                            </span>
                        </div> <br>

                        <div class="col-md-12"><label class="labels"> Enter Your Fee</label><input
                                type="number" class="form-control" placeholder="fee" value=""
                                name="doc_fee">
                            <span class="text-danger">
                                @error('years_of_experience')
                                    {{$message}}
                                @enderror
                            </span>
                        </div> <br>

                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    @endsection

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script>

        jQuery(document).ready(function () {
            jQuery('#city').change(function () {
                let cid = jQuery(this).val();
                jQuery.ajax({
                    url: '/getState',
                    type: 'post',
                    data: 'cid=' + cid + '&_token={{csrf_token()}}',
                    success: function (result) {
                        jQuery('#hospital_name').html(result)
                    }
                });
            });
        });

        // jQuery(document).ready(function(){
        //     jQuery('#city').change(function(){
        // 				let cid=jQuery(this).val();
        // 			    alert.(cid)
        // 				jQuery.ajax({
        // 					url:'/getState',
        // 					type:'post',
        // 					data:'cid='+cid+'&_token={{csrf_token()}}',
        // 					success:function(result){
        // 						jQuery('#hospital').html(result)
        // 					}
        // 				});
        // 			});
        //         });

        let profilepic = document.getElementById("profile_pic");
        let inputfile = document.getElementById("input_file");

        inputfile.onchange = function () {
            profilepic.src = URL.createObjectURL(inputfile.files[0]);
        }



        function validatePassword() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            var message = document.getElementById("message");
            var submitButton = document.getElementById("submitBtn");

            if (password !== confirmPassword) {
                message.textContent = "Passwords don't match";
                submitButton.disabled = true;
            } else {
                message.textContent = "Passwords match";
                submitButton.disabled = false;
            }
        }



        //dependent dropdown script



    </script>




</body>

</html>
