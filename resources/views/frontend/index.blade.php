@extends('frontend.Layout.main')

@section('main-container')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Tabib</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <!-- Styles -->
        <style>
        *,body{
              margin:0px;
              padding:0px;

        }
        #footer {
            color: #444444;
            font-size: 14px;
            background: #f1f7fd;
            position: relative;
            top:1900px;
            width: 100%;
            border-bottom:1px solid gray;
            padding-top: 0px;
        }
          .img-container{
            width: 100%; /* Full width */
            height: 50vh; /* 30% of the viewport height */
            /* overflow: hidden; */


      padding:0;
      margin:0;


        }

        /* Style for the image */
        .img-container img {
            width: 100%; /* Full width of container */
            height: 100%; /* Full height of container */
            object-fit: cover; /* Crop image to cover container */
            opacity: 0.65;




        }
        .back-img-text{

            position: relative; /* Enable absolute positioning */
            top: -45%; /* Center vertically */
            left: 50%; /* Center horizontally */
            transform: translate(-50%, -50%); /* Center text precisely */
            color: white; /* Text color */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 110%);
            text-align: center; /* Center text horizontally */


        }
        /* Styling for dropdown search bar city */

           .select-menu-city{
            position: relative;
            left:30%;
            top:-45%;
            display: inline-block;

        }


        /* Style for the search box */
        .search-box {
            /* width: auto; */
            padding: 15px 25px;
            border: 1px solid black;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 5px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            opacity:0.9;
            box-shadow:3px 3px 3px rgba(0, 0, 0, 0.5);
            text-align:center;

        }
        .search-box:focus {outline:none}

        /* Style for the dropdown menu */
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            width: 100%;
            max-height: 200px;
            overflow-y: auto;
            border: 1px solid #ccc;
            border-top: none;
            border-radius: 0 0 5px 5px;
            background-color: #fff;
            box-sizing: border-box;
            display: none;
            opacity: 0.9;


        }
        .dropdown-menu.active {
    max-height: 200px; /* Show the dropdown */
    opacity: 0.9; /* Show the dropdown */
}


        /* Style for individual dropdown items */
        .dropdown-item {
            padding: 5px;
            cursor: pointer;
        }


        /* Style for the dropdown items on hover */
        .dropdown-item:hover {
            background-color: #f0f0f0;
        }




            /* Styling for dropdown search bar city */

        .select-menu-disease-doctor-illness{
            position: relative;
            left:35%;
            top:-45%;
            display: inline-block;

        }
        .dropdown-menu-2{
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            width: 100%;
            max-height: 200px;
            overflow-y: auto;
            border: 1px solid #ccc;
            border-top: none;
            border-radius: 0 0 5px 5px;
            background-color: #fff;
            box-sizing: border-box;
            display: none;
            opacity: 0.9;
            transition: max-height 0.1s ease;
        }
        .with-icon {
    padding-left: 40px; /* Adjust padding to accommodate the icon */
    background-image: url('images/location.png'); /* URL of the location icon image */
    background-size: 40px; /* Adjust size of the icon */
    background-repeat: no-repeat;
    background-position: 10px center; /* Adjust position of the icon */
}

.section-2{

    border-bottom:0.8px solid gray;
    height:27vh;
    position:absolute;
    top:75.5vh;
    width:100%;
    padding:0px;
    margin:0px;



}

.flex-container-1{
    display: flex; /* Enable flexbox */
    justify-content: space-around ; /* Distribute space around items */

    position: relative;
    top:25%;

    /* height: 200px; Set container height */

  }

  .flex-item {
    color: black; /* Text color */
    display: flex; /* Enable flexbox */
    justify-content: center; /* Center content horizontally */
    align-items: center; /* Center content vertically */

   flex-direction: column; /* Align items in a column */


  }
  .sec-icon{
    font-size:45px;
    margin-bottom: 10px;

  }
  .sec-icon:hover{
    font-size:50px;
    transition: font-size 0.2s ease;


  }
  a {
    text-decoration:none;

  }

  .catagories-sec{

    height:78vh;
    position:absolute;
    top:102.5vh;

    width:100%;
  }
  .catagories-sec h3{
   position:absolute;
   left:60px;
   top:30px;
   display:inline-block;
  }



  .catagory-container{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around; /* This will space the cards evenly */

    /* Adjust height, padding, margin, etc., as needed for your design */
    /* Example height */
    gap: 40px; /* Adjust the gap between cards as needed */
    margin-top:60px;
    padding:0 130px 0 130px;

  }
  .catagory-container a{
    border:1px solid black;
    border-radius:5px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5), -5px -5px 10px rgba(255, 255, 255, 0.5), inset 0px 0px 10px rgba(0, 0, 0, 0.25);
    width:20px;
    padding:20px 0 20px 0;
    display:block;
    display:flex;
    flex: 0 0 30%; /* Each card takes up 30% of the container width */
    color: black; /* Text color */
    align-items: center; /* Center content vertically */
    flex-direction: column; /* Align items in a column */

  }
  .catagory-cards{

    display: flex; /* Enable flexbox */

    align-items: center; /* Center content vertically */

   flex-direction: column; /* Align items in a column */

  }
  .sec-icon-2{
    font-size:45px;
    margin-bottom: 10px;
  }
  .catagory-details-btn{

    display: inline-block;
    background-color: #4CAF50; /* Green background */
    color: white; /* White text */
    padding: 10px 20px; /* Some padding */
    text-align: center; /* Center the text */
    text-decoration: none; /* Remove underline */
    font-size: 16px; /* Set a font size */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Mouse pointer on hover */
    position: absolute;
    top:30px;
    right:130px;

  }

  /* Highly Rated doctors profiles stylings*/



  .main{
position: absolute;
top: 180.5vh;
display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    flex-wrap: wrap;

}

.card{
    width: 17%;
    height:auto;
    display: inline-block;
    border-radius: 5px;
    margin: 2%;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5)

   }

.image img{
 width: 100%;
 border-top-right-radius: 5px;
 border-top-left-radius: 5px;
 opacity: 1;


}

.title{


 padding:10px 20px 0 4px;

}

h1{
 font-size: 20px;
}

.des{
 padding:3px;
 text-align: center;
 padding-top: 10px;
 border-bottom-right-radius: 5px;
 border-bottom-left-radius: 5px;
}


.speciality{
    padding-left:10px;
}


.how-it-works-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    position:absolute;
    top:280vh;
  }

  .how-it-works-heading {
    margin-left:40px;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .steps-container {
    margin-left:120px;
    display: flex;
    justify-content: space-between;
    gap: 100px;
  }

  .step {
    flex: 1;
    text-align: center;
  }

  .step img {
    width: 100%; /* Adjust based on your preference */
    max-width: 150px; /* Ensures the image does not grow too large */
    height: 150px; /* Makes the image square */
    object-fit: cover; /* Ensures the image covers the square area */
    margin-bottom: 10px;
    opacity: 1;
  }

  /* .book-appointment-btn {
    background-color: #007bff; /* Blue background */
    color: white; /* White text color */
    border: 2px solid #007bff; /* Blue border */
    padding: 10px 20px; /* Padding */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Cursor on hover */
    text-decoration: none; /* Remove underline from anchor */
    transition: background-color 0.3s, color 0.3s, border-color 0.3s; /* Smooth transition */
    display: inline-block; /* Ensure the button respects its content's width */
}

.book-appointment-btn:hover {
    background-color: #0056b3; /* Darker blue on hover */
    border-color: #0056b3; /* Darker blue border on hover */
} */



        </style>
    </head>
    <body>
<div class="img-container">
        <img src={{asset('images/back.png')}} alt="no image" >
        <h1 class="back-img-text">Find the Right Doctor For You</h1>

    <div class="select-menu-city">
        <input type="text" class="search-box with-icon" placeholder="Enter City">
        <div class="dropdown-menu">
            <div class="dropdown-item">Lahore</div>
            <div class="dropdown-item">Karachi</div>
            <div class="dropdown-item">Islamabad</div>
            <div class="dropdown-item">Sahiwal</div>
            <div class="dropdown-item">Multan</div>
        </div>
    </div>
    <div class="select-menu-disease-doctor-illness">
        <input type="text" class="search-box" placeholder="Search By Hospital/Doctor">
        <div class="dropdown-menu-2">
            <div class="dropdown-item">Doctor Hospital</div>
            <div class="dropdown-item">Nishter Hospital</div>
            <div class="dropdown-item">Akram Hospital</div>
            <div class="dropdown-item">Aga Khan Hospital</div>
            <div class="dropdown-item">Omar Hospital</div>
    </div>
</div>

<!-- here goes the another section -->
<section class="section-2">

<div class="flex-container-1">

<a href="{{ route('doctors') }}">
    <div class="flex-item">

    <i class="fa fa-hospital sec-icon" aria-hidden="true"></i>

    <div>In-Clinic-visit</div>
    </div>
</a>
<a href="https://www.google.com">
    <div class="flex-item">

    <i class="fa fa-mobile sec-icon" aria-hidden="true"></i>


    <div>Online meeting</div>
    </div>
</a>
<a href="{{ route('doctors') }}">
    <div class="flex-item">

    <i class="fa fa-user-md sec-icon" aria-hidden="true"></i>

    <div>Doctor Profiles</div>
    </div>
</a>

  </div>

</section>





<!-- here is another section -->

<section class="catagories-sec">
<h3>Meet Our Experienced Doctors</h3>
<a href="https://www.google.com" class="catagory-details-btn">View All</a>

<div class="catagory-container">

<a href="https://www.google.com">
    <div class="catagory-cards">

    <i class="fa fa-stethoscope sec-icon-2" aria-hidden="true"></i>

    <div>General Medicine Specialist</div>
    </div>
</a>
<a href="https://www.google.com">
    <div class="catagory-cards">

    <i class="fa fa-child sec-icon-2" aria-hidden="true"></i>

    <div>Child Specialist</div>
    </div>
</a><a href="https://www.google.com">
    <div class="catagory-cards">

    <i class="fa-solid fa-tooth sec-icon-2"></i>

    <div>Dentist</div>
    </div>
</a><a href="https://www.google.com">
    <div class="catagory-cards">

    <i class="fa fa-heartbeat sec-icon-2" aria-hidden="true"></i>

    <div>Cardiologist</div>
    </div>
</a><a href="https://www.google.com">
    <div class="catagory-cards">

    <i class="fa-solid fa-brain sec-icon-2"></i>

    <div>Neurologist</div>
    </div>
</a><a href="https://www.google.com">
    <div class="catagory-cards">

    <i class="fa fa-eye sec-icon-2" aria-hidden="true"></i>

    <div>Eye Specialist</div>
    </div>
</a>

  </div>
</section>


<!-- hightly rated doctors profile cards -->
<div class="main">
    <!-- Loop through the random doctors -->
    @foreach ($randomDoctors as $doctor)
    <div class="card">
        <div class="image">
            <a href="profile.html" class="avatar avatar-sm mr-2">
                <img class="avatar-img rounded-circle" src="{{ asset($doctor->profile_pic) }}" alt="Doctor's Profile Pic">
            </a>
        </div>
        <div class="title">
            <h3>{{ $doctor->name }}</h3>
        </div>
        <div class="speciality">
            <p>{{ $doctor->doc_speciality }}</p>
        </div>
        <div class="des">
            <!-- Link to book appointment route -->
            <button type="button" class="btn btn-info">
                <a href="{{ route('book.appointment', $doctor->id) }}">Book Appointment</a>
            </button>
        </div>

    </div>
    <!-- /card -->
    @endforeach
</div>
<!-- /main -->



<!-- here goes another section -->

<div class="how-it-works-container">
  <div class="how-it-works-heading">How It Works</div>
  <div class="steps-container">
    <div class="step">
    <img src={{asset('images/chose.webp')}} alt="no image">
      <div>Chose a Doctor</div>
    </div>
    <div class="step">
        <a href="{{ route('doctors') }}">
    <img src={{asset('images/book.webp')}} alt="no image">
      <div>Book An Appointment</div> </a>
    </div>
    <div class="step">
    <img src={{asset('images/Comfirmation.webp')}} alt="no image">
      <div>Wait for the Comfirmation</div>
    </div>
    <div class="step">
        <a href="{{ route('doctors') }}">
    <img src={{asset('images/visit.webp')}} alt="no image">
      <div>Visit the Doctor</div></a>
    </div>

    <div class="step">
    <img src={{asset('images/review.webp')}} alt="no image">
      <div>Review the Doctor</div>
    </div>
  </div>
</div>



        <script>
    // JavaScript code to toggle dropdown menu visibility
    document.addEventListener('click', function(e) {
        const selectMenu = document.querySelector('.select-menu-city');
        const dropdownMenu = selectMenu.querySelector('.dropdown-menu');
        if (e.target.closest('.select-menu-city')) {
            dropdownMenu.style.display = 'block';
        } else {
            dropdownMenu.style.display = 'none';
        }
    });
    document.addEventListener('click', function(b) {
        const selectMenu = document.querySelector('.select-menu-disease-doctor-illness');
        const dropdownMenu = selectMenu.querySelector('.dropdown-menu-2');
        if (b.target.closest('.select-menu-disease-doctor-illness')) {
            dropdownMenu.style.display = 'block';
        } else {
            dropdownMenu.style.display = 'none';
        }
    });
</script>

    </body>
</html>


@endsection
