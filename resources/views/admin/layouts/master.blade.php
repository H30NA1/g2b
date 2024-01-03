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
  <title>G2B Admin</title>
  <!-- FAVICONS ICON -->

  <link rel="shortcut icon" type="image/png" href="{{ getFileVersion('/assets/admin/images/favicon.png') }}">

  <link href="{{ getFileVersion('/assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
  <link href="{{ getFileVersion('/assets/admin/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
  <link href="{{ getFileVersion('/assets/admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
  <link href="{{ getFileVersion('/assets/admin/vendor/jvmap/jquery-jvectormap.css') }}" rel="stylesheet">
  <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
  <link href="{{ getFileVersion('/assets/admin/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

  <!-- tagify-css -->
  <link href="{{ getFileVersion('/assets/admin/vendor/tagify/dist/tagify.css') }}" rel="stylesheet">

  <!-- Style css -->
  <link href="{{ getFileVersion('/assets/admin/css/style.css') }}" rel="stylesheet">

  @stack('css')
</head>

<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

  <!--*******************
        Preloader start
    ********************-->
  <div id="preloader">
    <div class="lds-ripple">
      <div></div>
      <div></div>
    </div>
  </div>
  <!--*******************
        Preloader end
    ********************-->
  <!-- MAIN BODY -->
  <div id="main-wrapper">
    @include('admin.includes.navbar')

    @yield('content')
    <!-- /END MAIN BODY -->
    <!-- FOOTER -->
    @include('admin.includes.footer')
    <!-- /END FOOTER -->

    @include('admin.includes.extra')
  </div>
  <!-- SCRIPT -->

  <!-- Structured data settings -->

  <!--**********************************
        Scripts
    ***********************************-->
  <!-- Required vendors -->
  <script src="{{ getFileVersion('/assets/admin/vendor/global/global.min.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/vendor/apexchart/apexchart.js') }}"></script>

  <!-- tagify -->
  <script src="{{ getFileVersion('/assets/admin/vendor/tagify/dist/tagify.js') }}"></script>

  <!-- Dashboard 1 -->
  <script src="{{ getFileVersion('/assets/admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/vendor/datatables/js/buttons.html5.min.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/vendor/datatables/js/jszip.min.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/js/plugins-init/datatables.init.js') }}"></script>

  <script src="{{ getFileVersion('/assets/admin/js/custom.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/js/deznav-init.js') }}"></script>
  <script>
    jQuery(document).ready(function() {
      setTimeout(function() {
        dzSettingsOptions.version = 'dark';
        new dzSettings(dzSettingsOptions);
      }, 1500)
    });
  </script>
  <!-- /END SCRIPT -->
  @stack('js')
</body>

</html>