<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link rel="stylesheet" href="doc_regis.css">
    <title>Document</title>


</head>

<body>
    <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right" id="prof_section">
                    <div class="d-flex flex-column align-items-center text-center p-3 "><span class="font-weight-bold"
                            id="upload_text">Upload Your Professional Photo</span><img class="rounded-circle mt-2"
                            width="150px" id="profile_pic"
                            src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    </div>
                    <label for="input_file" id="upload">Upload Photo</label>
                <input type="file" accept="image/jpg, image/jpeg, image/png" id="input_file">
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Hi {{Auth::guard('doctor')->user()->name}}! Complete Your Profile</h4>
                        </div>
                        <!-- <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" placeholder="enter full name" value=""></div>

                    </div> -->
                        <div class="row mt-3">


                        <div class="col-md-12"><label class="labels" for="letters">Select Speciality</label><select
                                class="col-md-12 form-control" id="letters" name="letters">
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                                <option value="d">D</option>
                                <option value="e">E</option>
                            </select></div>

                        <div class="col-md-12"><label class="labels" for="letters">Select Catagory</label><select
                                class="col-md-12 form-control" id="letters" name="letters">
                                <option value="a">E</option>
                                <option value="b">F</option>
                                <option value="c">G</option>
                                <option value="d">H</option>
                                <option value="e">I</option>
                            </select></div>

                            <label for="input_qualification_file" id="upload-document">Upload image of orignal
                                documents</label>
                        <input type="file" accept="image/jpg, image/jpeg, image/png" id="input_qualification_file">

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
                        <h8 style="padding-top: 5px; color: rgb(83, 83, 83);" class="text-left mt-3">Your Qualification
                            </h8>



                        <div class="col-md-12"><label class="labels">Degree</label><input type="text"
                                class="form-control" placeholder="enter your degree" value=""></div>
                            <div class="col-md-12"><label class="labels">University</label><input type="text"
                                class="form-control" placeholder="enter your University/college" value=""></div>


                        <h8 style="padding-top: 5px; color: rgb(83, 83, 83)grey;" class="text-left mt-3">Your Practices
                            </h8>


                        <div class="col-md-12"><label class="labels" for="letters">Select City</label><select
                                class="col-md-12 form-control" id="letters" name="letters">
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                                <option value="d">D</option>
                                <option value="e">E</option>
                            </select></div>

                        <div class="col-md-12"><label class="labels" for="letters">Select Hospital</label><select
                                class="col-md-12 form-control" id="letters" name="letters">
                                <option value="a">E</option>
                                <option value="b">F</option>
                                <option value="c">G</option>
                                <option value="d">H</option>
                                <option value="e">I</option>
                            </select></div>



                        <div class="mt-2">select days</div>

                        <input type="checkbox" id="mon" name="mon">
                        <label for="mon">Mon</label><br>
                        <input type="checkbox" id="tue" name="tue">
                        <label for="tue">Tue</label><br>
                        <input type="checkbox" id="wed" name="wed">
                        <label for="wed">Wed</label><br>
                        <input type="checkbox" id="thu" name="thu">
                        <label for="thu">Thu</label><br>
                        <input type="checkbox" id="fri" name="fri">
                        <label for="fri">Fri</label><br>
                        <input type="checkbox" id="sat" name="sat">
                        <label for="sat">Sat</label><br>
                        <input type="checkbox" id="sun" name="sun">
                        <label for="sun">Sun</label><br><br>

                            <div class="row">
                                <div class="col-md-6">
                                <label class="mt-2" for="stime">select start time</label>
                                <input class="mt-1 col-md-6" type="time" id="stime" name="mytime" class="form-control"
                                    required>
                                </div>

                                <div class="col-md-6">
                                    <label class="mt-2" for="etime">select end time</label>
                                <input class="mt-1" type="time" id="etime" name="mytime" class="form-control" required>
                            </div>

                            </div>




                        </div>

                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Submit</button></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>
                                Experience</span><span class="border px-3 p-1 add-experience"><i
                                    class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels"> Enter Experience</label><input type="text"
                            class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text"
                            class="form-control" placeholder="additional details" value=""></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script>

        let profilepic = document.getElementById("profile_pic");
        let inputfile = document.getElementById("input_file");

        inputfile.onchange = function () {
            profilepic.src = URL.createObjectURL(inputfile.files[0]);
        }

    </script>
</body>

</html>
