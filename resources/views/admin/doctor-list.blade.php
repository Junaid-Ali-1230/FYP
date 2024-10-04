<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doctor List Page</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">

		<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

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
							<li class="{{ Request::is('admin.dashboard') ? 'active' : '' }}">
								<a href="{{ route('admin.dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li class="{{ Request::is('admin.appointments') ? 'active' : '' }}">
								<a href="{{ route('admin.appointments') }}"><i class="fe fe-layout"></i> <span>Appointments</span></a>
							</li>

							<li class="{{ Request::is('admin-doctors') ? 'active' : '' }}">
								<a href="{{ route('admin.doctors') }}"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
							</li>
							<li class="{{ Request::is('admin.patient') ? 'active' : '' }}">
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
								<h3 class="page-title">List of Doctors</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Doctor</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Doctor Name</th>
													<th>Speciality</th>
                                                    <th>Doctor Fee</th>
                                                    <th>Phone number</th>
													<th>Account Status</th>

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
                                                        <td>{{ number_format($doctor->doc_fee, 2) }}</td>
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

        <script src="assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>

		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>

    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/doctor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
</html>