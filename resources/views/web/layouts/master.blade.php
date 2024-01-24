<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- if IEmeta(http-equiv='X-UA-Compatible', content='IE=edge,chrome=1')-->
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <meta name="keywords" content="TechBoostify" />
  <meta name="description" content="" />
  <meta name="robots" content="INDEX,FOLLOW">
  <meta name="format-detection" content="telephone=no">
  <title>G2Bytes</title>
  <link rel="shortcut icon" href="{{ getFileversion('/assets/web/assets/media/logos/favicon.ico') }}" />
  <!--begin::Fonts(mandatory for all pages)-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
  <!--end::Fonts-->
  <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
  <link href="{{ getFileversion('/assets/web/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ getFileversion('/assets/web/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

  <script>
    // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) 
    if (window.top != window.self) {
      window.top.location.replace(window.self.location.href);
    }
  </script>
  @stack('css')
</head>

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-body position-relative app-blank">
  <!--begin::Root-->
  <div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Header Section-->
    @include('web.includes.header')
    <!--end::Header Section-->
    @yield('content')

    @include('web.includes.footer')
  </div>
  <!--end::Root-->
  <!--begin::Javascript-->
  <script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ getFileversion('assets/web/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ getFileversion('assets/web/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{ getFileversion('/assets/web/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
		<script src="{{ getFileversion('assets/web/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ getFileversion('assets/web/js/custom/landing.js') }}"></script>
		<script src="{{ getFileversion('assets/web/js/custom/pages/pricing/general.js') }}"></script>
		<script src="{{ getFileversion('assets/web/js/custom/utilities/modals/create-campaign.js') }}"></script>
		<script src="{{ getFileversion('assets/web/js/custom/utilities/modals/new-target.js') }}"></script>
		<script src="{{ getFileversion('assets/web/js/custom/utilities/modals/new-card.js') }}"></script>
		<script src="{{ getFileversion('assets/web/js/custom/utilities/modals/bidding.js') }}"></script>
		<script src="{{ getFileversion('assets/web/js/custom/utilities/modals/top-up-wallet.js') }}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
  <!--begin::Theme mode setup on page load-->
  <script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
      if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
        themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
      } else {
        if (localStorage.getItem("data-bs-theme") !== null) {
          themeMode = localStorage.getItem("data-bs-theme");
        } else {
          themeMode = defaultThemeMode;
        }
      }
      if (themeMode === "system") {
        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
      }
      document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
  </script>
  <!--end::Theme mode setup on page load-->
  @stack('js')
</body>

</html>