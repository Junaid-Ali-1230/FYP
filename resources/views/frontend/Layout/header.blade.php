<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tabib</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="Frontend/img/favicon.png" rel="icon">
    <link href="Frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="Frontend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="Frontend/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="Frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="Frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="Frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="Frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="Frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/Frontend/css/style.css" rel="stylesheet">

    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Bundle with Popper -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function(){
        $('.dropdown-toggle').dropdown();
    });
</script>


</head>

<body>



    <!-- ======= Top Bar ======= -->


    <header id="header " class="position-relative">

        <div class="main_header">

            <div class="container d-flex align-items-center">

                <h1 class="logo me-auto"><a href="{{url('/')}}">Tabib</a></h1>
                <nav id="navbar" class="navbar left-side-nav order-1 order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto" href="{{url('/doctors')}}">Doctors</a></li>
                        <li class="dropdown"><a href="#"><span>Hospitals</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li class="dropdown"><a href="#"><span>Lahore Hospitals</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="#">Hameed Latif Hospital</a></li>
                                        <li><a href="#">Saleem Hospital</a></li>
                                        <li><a href="#">Ali Hospital</a></li>
                                        <li><a href="#">Akram Hospital</a></li>
                                        <li><a href="#">Doctor Hospital</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#"><span>Karachi Hospitals</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="#">Agha Khan Hospital</a></li>
                                        <li><a href="#">National Hospital</a></li>
                                        <li><a href="#">Medicare Hospital</a></li>
                                        <li><a href="#">Ali Hospital</a></li>
                                        <li><a href="#">Nishter Hospital</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#"><span>Multan Hospitals</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="#">Nishter Hospital</a></li>
                                        <li><a href="#">Multan Hospital</a></li>
                                        <li><a href="#">Al Khaliq Hospital</a></li>
                                        <li><a href="#">Mission Hospital</a></li>
                                        <li><a href="#">South Punjab Hospital</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#"><span>Sahiwal Hospitals</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="#">Sahiwal Hospital</a></li>
                                        <li><a href="#">Mission Hospital</a></li>
                                        <li><a href="#">Ali Hospital</a></li>
                                        <li><a href="#">Mid City Hospital</a></li>
                                        <li><a href="#">Christian Hospital</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#"><span>List of All Hospitals</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="#">Sahiwal Hospital</a></li>
                                        <li><a href="#">Mission Hospital</a></li>
                                        <li><a href="#">Ali Hospital</a></li>
                                        <li><a href="#">Mid City Hospital</a></li>
                                        <li><a href="#">Christian Hospital</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="{{url('/Health-Blogs')}}">Health Blogs</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->



                <a href="{{url('doctor/login')}}" class="appointment-btn scrollto" id="doctor-login"><span class="d-none d-md-inline">Login/Signup as Doctor</span></a>
            
       
                @if(auth()->user() == null)
    <a href="{{ url('/login') }}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Login/Signup</span></a>
@else
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ auth()->user()->name }}
        </button>


        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{url('/home')}}">Profile</a>


            <form id="frm-logout" action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                <button type="submit" class="dropdown-item btn btn-danger">Logout</button>
            </form>
        </div>
    </div>
@endif

            </div>
        </div>
    </header>



    <!-- End Header -->

