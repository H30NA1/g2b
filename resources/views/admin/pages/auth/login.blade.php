<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<meta name="keywords" content="G2B" />
	<meta name="description" content="" />
	<meta name="robots" content="NOINDEX,NOFOLLOW">
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Server Info</title>

	<!-- FAVICONS ICON -->
	<!-- <link rel="shortcut icon" type="image/png" href="{{ getFileVersion('/assets/images/favicon.ico') }}"> -->
	<link href="{{ getFileVersion('/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
	<link href="{{ getFileVersion('/assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="vh-100">
	<div class="authincation h-100">
		<div class="container-fluid h-100">
			<div class="row h-100">
				<div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Sign In</h3>
						</div>
						@include('includes.components.notify')
						<div class="basic-form">
							<form class="form-valide-with-icon needs-validation was-validated" action="{{ route('web.login') }}" method="POST" novalidate>
								@csrf
								<div class="mb-4">
									<label class="text-label form-label" for="validationCustomUsername">ID</label>
									<div class="input-group">
										<span class="input-group-text"> <i class="fa fa-user"></i> </span>
										<input type="text" name="id" class="form-control" id="validationCustomUsername" placeholder="Enter a username.." value="{{ old('id', request()->get('id')) }}" required>
										<div class="invalid-feedback">
											Please Enter a username or an email.
											</div>
									</div>
								</div>
								<div class="mb-4 position-relative">
									<label class="text-label form-label" for="dz-password">Password *</label>
									<div class="input-group transparent-append">
										<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
										<input type="password" name="password" class="form-control" id="dz-password" placeholder="Choose a safe one.." required>
										<span class="input-group-text show-pass"> 
											<i class="fa fa-eye-slash"></i>
											<i class="fa fa-eye"></i>
										</span>
										<div class="invalid-feedback">
											Please Enter a Password.
										</div>
									</div>
								</div>
								<div class="form-row d-flex justify-content-between mt-4 mb-2">
									<div class="mb-4">
										<div class="custom-checkbox mb-3">
											<input type="checkbox"  id="customCheckBox1">
											<label class="form-check-label" for="customCheckBox1">Remember my preference</label>
										</div>
									</div>
									<div class="mb-4">
										<a href="{{ route('web.forgot') }}" class="btn-link text-primary">Forgot Password?</a>
									</div>
								</div>
								<div class="text-center mb-4">
									<button type="submit" class="btn btn-primary btn-block">Sign In</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--**********************************
	Scripts
***********************************-->
	<!-- Required vendors -->
	<script src="{{ getFileVersion('/assets/vendor/global/global.min.js') }}"></script>
	<script src="{{ getFileVersion('/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ getFileVersion('/assets/js/deznav-init.js') }}"></script>

	<script src="{{ getFileVersion('/assets/js/custom.js') }}"></script>
	<script src="{{ getFileVersion('/assets/js/styleSwitcher.js') }}"></script>

</body>

</html>