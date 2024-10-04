<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Appointment List Page</title>

	<!-- Favicon -->
{{-- <link rel="shortcut icon" type="image/x-icon" href=""> --}}

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}">

<!-- Feathericon CSS -->
<link rel="stylesheet" href="{{ url('assets/css/feathericon.min.css') }}">

<!-- Datatables CSS -->
<link rel="stylesheet" href="{{ url('assets/plugins/datatables/datatables.min.css') }}">

<!-- Main CSS -->
<link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

    </head>
    <body>

		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<!-- Header -->
            <div class="header">

				<!-- Logo -->
                <div class="header-left">
    <a href="{{ url('index.html') }}" class="logo">
        <img src="{{ url('assets/img/logo.png') }}" alt="Logo">
    </a>
    {{-- <a href="{{ url('index.html') }}" class="logo logo-small">
        <img src="{{ url('assets/img/logo-small.png') }}" alt="Logo" width="30" height="30">
    </a> --}}
</div>

				<!-- /Logo -->

				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>

				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>

				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->

				<!-- Header Right Menu -->
				<ul class="nav user-menu">



					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
        <span class="user-img"><img class="rounded-circle" src="{{url($profile_pic)}}" width="31" alt="Ryan Taylor"></span>
    </a>
    <div class="dropdown-menu">
        <div class="user-header">
            <div class="avatar avatar-sm">
                <img src="{{url($profile_pic)}}" alt="User Image" class="avatar-img rounded-circle">
            </div>
            <div class="user-text">

                {{Auth::guard('doctor')->user()->name}}

               <p class="text-muted mb-0">Doctor</p>
           </div>
        </div>
        <a class="dropdown-item"  href="{{ route('doctor.logout') }}">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>

					<!-- /User Menu -->

				</ul>
				<!-- /Header Right Menu -->

            </div>
			<!-- /Header -->

			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="menu-title">
							<span>Main</span>
						</li>
						<li class="{{ Request::is('doctor/profile') ? 'active' : '' }}">
							<a href="{{url('doctor/profile')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
						</li>
						<li  class="{{ Request::is('doctor/profile/appointments') ? 'active' : '' }}">
							<a href="{{url('doctor/profile/appointments')}}"><i class="fe fe-layout"></i> <span>Appointments</span></a>
						</li>




					</ul>
				</div>
			</div>
		</div>

			<!-- /Sidebar -->

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">

							<div class="col-sm-12">
								<h3 class="page-title">Appointments</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Appointments</li>
								</ul>

							</div>
						</div>
					</div>

					<!-- /Page Header -->
					@if ($appointments->count() > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Patient Name</th>
                <th>Hospital Name</th>
                <th>Appointment Day</th>
                <th>Appointment Time</th>
                <th>Appointment Date</th>
                <th>Fee Charged</th>
                <th class="text-left">Approve</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>
                        <h2 class="table-avatar">
                            <a href="{{ url('profile.html') }}" class="avatar avatar-sm mr-2">
                                <img class="avatar-img rounded-circle" src="{{ url('assets/img/patients/patient1.jpg') }}" alt="User Image">
                            </a>
                            <a href="{{ url('profile.html') }}">{{ $appointment->patient->name }}</a>
                        </h2>
                    </td>
                    <td>{{ $appointment->hospital_names->hospital_name}}</td>

                    <td>{{ $appointment->appointment_day }} </td>
                    <td> <span class="text-primary d-block">{{ $appointment->appointment_time }}</span></td>
                    <td>{{$appointment->created_at}}</td>
                    <td class="text-center">
                        {{$appointment->doctor->doc_fee }}
                    </td>
                    <td >
                        <div class="status-toggle">
                            <input type="checkbox" id="status_{{ $appointment->id }}" class="check" {{ $appointment->status !='pending' ? 'checked' : '' }} onchange="updateStatus({{ $appointment->id }}, this.checked)">
                        <label for="status_{{ $appointment->id }}" class="checktoggle">checkbox</label>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No appointments found.</p>
@endif

							<!-- /Recent Orders -->

						</div>


					</div>
				</div>
			{{-- </div> --}}
			<!-- /Page Wrapper -->

        {{-- </div> --}}
		<!-- /Main Wrapper -->

		<!-- jQuery -->
       <!-- jQuery --> <script src="{{ url('assets/js/jquery-3.2.1.min.js') }}"></script> <!-- Bootstrap Core JS --> <script src="{{ url('assets/js/popper.min.js') }}"></script> <script src="{{ url('assets/js/bootstrap.min.js') }}"></script> <!-- Slimscroll JS --> <script src="{{ url('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script> <!-- Datatables JS --> <script src="{{ url('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script> <script src="{{ url('assets/plugins/datatables/datatables.min.js') }}"></script> <!-- Custom JS --> <script src="{{ url('assets/js/script.js') }}"></script>

<script>

     function updateStatus(id, status) {

                $.ajax({
                    url: '{{ route('appointment.updateStatus') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id,
                        status: status ? 'confirmed' : 'pending'
                    },
                    success: function(response) {
                        alert(response.success);
                    }
                });
            }
</script>
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:49 GMT -->
</html>
