<!DOCTYPE html>
<html lang="en">

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
    <title>G2Byte</title>
    <!-- FAVICONS ICON -->

    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ getFileVersion('/assets/admin/media/logos/favicon.ico') }} " />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ getFileVersion('/assets/admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ getFileVersion('/assets/admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ getFileVersion('/assets/admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url("{{ getFileVersion('/assets/admin/media/auth/bg4.jpg') }}");
            }

            [data-bs-theme="dark"] body {
                background-image: url("{{ getFileVersion('/assets/admin/media/auth/bg4-dark.jp') }}");
            }
        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::Aside-->
					<div class="d-flex flex-center flex-lg-start flex-column">
						<!--begin::Logo-->
						<a href="index.html" class="mb-7">
							<img alt="Logo" src="assets/media/logos/custom-3.svg" />
						</a>
						<!--end::Logo-->
						<!--begin::Title-->
						<h2 class="text-white fw-normal m-0">Branding tools designed for your business</h2>
						<!--end::Title-->
					</div>
					<!--begin::Aside-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
					<!--begin::Card-->
					<div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
						<!--begin::Wrapper-->
						<div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="kt_password_reset_form" data-kt-redirect-url="{{ route('admin.login') }}" action="{{ route('admin.forgot') }}" method="POST">
                                @csrf
                                <!--begin::Heading-->
								<div class="text-center mb-10">
									<!--begin::Title-->
									<h1 class="text-gray-900 fw-bolder mb-3">Forgot Password ?</h1>
									<!--end::Title-->
									<!--begin::Link-->
									<div class="text-gray-500 fw-semibold fs-6">Enter your email to reset your password.</div>
									<!--end::Link-->
								</div>
								<!--begin::Heading-->
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="text" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Email-->
								</div>
								<!--begin::Actions-->
								<div class="d-flex flex-wrap justify-content-center pb-lg-0">
									<button type="button" id="kt_password_reset_submit" class="btn btn-primary me-4">
										<!--begin::Indicator label-->
										<span class="indicator-label">Submit</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait... 
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
									<a href="{{ route('admin.login') }}" class="btn btn-light">Cancel</a>
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ getFileVersion('/assets/admin/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ getFileVersion('/assets/admin/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>