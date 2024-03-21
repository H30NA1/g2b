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
	<!-- FAVICONS ICON -->

	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link href="{{ getFileVersion('/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
	<link href="{{ getFileVersion('/assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="vh-100">
	<div class="authincation h-100">
		<div class="container-fluid h-100">
			<div class="row h-100">
				<div class="col-lg-6 col-md-7 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Reset password</h3>
						</div>
						@include('includes.components.notify')
						<form action="{{ route('web.reset') }}" method="POST">
							@csrf
							<input type="hidden" name="information" value="{{ request()->get('information') }}">
							<div class="mb-4 position-relative">
								<label class="text-label form-label" for="dz-password">Password</label>
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
							<div class="mb-4 position-relative">
								<label class="text-label form-label" for="dz-password2">Password Confirmation</label>
								<div class="input-group transparent-append">
									<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
									<input type="password" name="password_confirmation" class="form-control" id="dz-password2" placeholder="Password Confirmation" required>
									<div class="invalid-feedback">
										Please Enter a Password Confirmation.
									</div>
								</div>
							</div>
							<div class="text-center mb-4">
								<button type="submit" class="btn btn-primary btn-block">Submit</button>
							</div>
						</form>
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
	<script src="{{ getFileVersion('/assets/js/custom.js') }}"></script>
	<script src="{{ getFileVersion('/assets/js/deznav-init.js') }}"></script>


</body>

</html>