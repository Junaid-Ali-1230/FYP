<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:20 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Admin - Dashboard</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">

		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

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
                    <a href="index.html" class="logo">
						<img src="assets/img/logo.png" alt="Logo">
					</a>
					<a href="index.html" class="logo logo-small">
						<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
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

					{{-- <!-- Notifications -->
					<li class="nav-item dropdown noti-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/doctors/doctor-thumb-01.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Dr. Ruby Perrin</span> Schedule <span class="noti-title">her appointment</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/patients/patient1.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Charlene Reed</span> has booked her appointment to <span class="noti-title">Dr. Ruby Perrin</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/patients/patient2.jpg">
												</span>
												<div class="media-body">
												<p class="noti-details"><span class="noti-title">Travis Trimble</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/patients/patient3.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Carl Kelly</span> send a message <span class="noti-title"> to his doctor</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications --> --}}

					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									{{auth()->user()->name}}
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							{{-- <a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="settings.html">Settings</a> --}}
							<a class="dropdown-item" href="#"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
							<li class="{{ Request::is('admin-dashboard') ? 'active' : '' }}">
								<a href="{{ route('admin.dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li class="{{ Request::is('admin-appointments') ? 'active' : '' }}">
								<a href="{{ route('admin.appointments') }}"><i class="fe fe-layout"></i> <span>Appointments</span></a>
							</li>

							<li class="{{ Request::is('admin-doctors') ? 'active' : '' }}">
								<a href="{{ route('admin.doctors') }}"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
							</li>
							<li class="{{ Request::is('admin-patient') ? 'active' : '' }}">
								<a href="{{ route('admin.patient') }}"><i class="fe fe-user"></i> <span>Patients</span></a>
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
								<h3 class="page-title">Welcome Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-primary border-primary">
											<i class="fe fe-users"></i>
										</span>
										<div class="dash-count">
											<h3>{{$totalDoctors}}</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										<h6 class="text-muted">Doctors</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-primary w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-success">
											<i class="fe fe-credit-card"></i>
										</span>
										<div class="dash-count">
											<h3>{{$totalPatients}}</h3>
										</div>
									</div>
									<div class="dash-widget-info">

										<h6 class="text-muted">Patients</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-success w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-danger border-danger">
											<i class="fe fe-money"></i>
										</span>
										<div class="dash-count">
											<h3>{{$totalAppointments}}</h3>
										</div>
									</div>
									<div class="dash-widget-info">

										<h6 class="text-muted">Appointment</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-danger w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-warning border-warning">
											<i class="fe fe-folder"></i>
										</span>
										<div class="dash-count">
											<h3>{{ number_format($totalFee, 2) }}</h3>
										</div>
									</div>
									<div class="dash-widget-info">

										<h6 class="text-muted">Revenue</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-warning w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 d-flex">

							<!-- Recent Orders -->
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h4 class="card-title">Doctors List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Doctor Name</th>
													<th>Speciality</th>
													<th>Doctor Fee</th>
													<th>Doctor Phone</th>
                                                    <th>Status</th>
												</tr>
											</thead>
                                            <tbody>
                                                @foreach ($doctors as $doctor)
                                                    <tr>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="profile.html" class="avatar avatar-sm mr-2">
                                                                    <img class="avatar-img rounded-circle" src="{{ asset($doctor->profile_pic) }}" alt="Doctor's Profile Pic">
                                                                </a>
                                                                <a>{{ $doctor->name }}</a>
                                                            </h2>
                                                        </td>
                                                        <td>{{ $doctor->doc_speciality	 }}</td>
                                                        <td>{{ number_format($doctor->doc_fee) }}</td>
                                                        <td>{{$doctor->phone_no}}</td>
                                                        <td>
                                                            <div class="status-toggle">
                                                                <input type="checkbox" id="status_{{ $doctor->id }}" class="check" {{ $doctor->status ? 'checked' : '' }} onchange="updateStatus({{ $doctor->id }}, this.checked)">
                                                                <label for="status_{{ $doctor->id }}" class="checktoggle">checkbox</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->

						</div>
						<div class="col-md-6 d-flex">

							<!-- Feed Activity -->
							<div class="card  card-table flex-fill">
								<div class="card-header">
									<h4 class="card-title">Patients List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Patient ID</th>
													<th>Patient Name</th>
                                                    <th>Patient Email</th>
                                                    <th>Phone Number</th>
												</tr>
											</thead>
                                            <tbody>
                                                @foreach ($patients as $patient)
                                                    <tr>
                                                        <td>#{{ $patient->id }}</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                {{-- <a href="profile.html" class="avatar avatar-sm mr-2">
                                                                    <img class="avatar-img rounded-circle" src="{{ $patient->image }}" alt="User Image">
                                                                </a> --}}
                                                                <a >{{ $patient->name }}</a>
                                                            </h2>
                                                        </td>
                                                        <td>{{ $patient->email }}</td>
                                                        <td>
                                                            @if ($patient->appointments->isNotEmpty())
                                                                {{ $patient->appointments->first()->phone_number }}
                                                            @else
                                                                No appointment
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Feed Activity -->

						</div>
					</div>
					<div class="row">
						<div class="col-md-12">

							<!-- Recent Orders -->
							<div class="card card-table">
                                <div class="card-header">
                                    <h4 class="card-title">Appointment List</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Doctor Name</th>
                                                    <th>Speciality</th>
                                                    <th>Patient Name</th>
                                                    <th>Appointment Day</th>
                                                    <th>Appointment Time</th>
                                                    {{-- <th>Status</th> --}}
                                                    <th class="text-right">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($appointments as $appointment)
                                                <tr>
                                                    <td>{{ $appointment->doctor->name }}</td>
                                                    <td>{{ $appointment->doctor->doc_speciality }}</td>
                                                    <td>{{ $appointment->patient->name }}</td>
                                                    <td>{{ $appointment->appointment_day }}</td>
                                                    <td>{{ $appointment->appointment_time }}</td>
                                                    {{-- <td>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="status_fee_{{ $appointment->id }}" class="check" {{ $appointment->status ? 'checked' : '' }}>
                                                            <label for="status_{{ $appointment->id }}" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td> --}}
                                                    <td class="text-right">{{ number_format($appointment->doctor->doc_fee, 2) }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
							<!-- /Recent Orders -->

						</div>
					</div>

				</div>
			</div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->


        <script>
            function updateStatus(id, status) {
                $.ajax({
                    url: '{{ route('doctor.updateStatus') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id,
                        status: status ? 1 : 0
                    },
                    success: function(response) {
                        alert(response.success);
                    },
                    error: function(response) {
                        alert('Error: ' + response.responseJSON.error);
                    }
                });
            }

            $(document).ready(function() {
                $('.status-toggle input[type="checkbox"]').change(function() {
                    let id = $(this).attr('id').split('_')[1];
                    let status = $(this).is(':checked');
                    updateStatus(id, status);
                });
            });
        </script>


    {{-- <script>
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
</script> --}}
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

		<script src="assets/plugins/raphael/raphael.min.js"></script>
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/js/chart.morris.js"></script>

		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>

    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:34 GMT -->
</html>
