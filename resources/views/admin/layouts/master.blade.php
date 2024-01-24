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
  <title>Server Info</title>
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

  @stack('css')
</head>

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true" data-kt-app-header-secondary-enabled="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">

  <!-- MAIN BODY -->
  <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
      <!--begin::Header-->
      @include('admin.includes.header')
      <!--end::Header-->
      <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <!--begin::Sidebar-->
        @include('admin.includes.sidebar')
        <!--end::Sidebar-->

        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
          @yield('content')
          <!-- FOOTER -->
          @include('admin.includes.footer')
          <!-- /END FOOTER -->
        </div>
        <!--end:::Main-->
      </div>
    </div>
  </div>

  <!--begin::Drawers-->
  @include('admin.includes.components.activities.drawer')
  <!--end::Drawers-->
  <!--begin::Scrolltop-->
  <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-outline ki-arrow-up"></i>
  </div>
  @include('admin.includes.components.scroll')
  <!--end::Scrolltop-->
  <!--begin::Modals-->
  <!--begin::Modal - Create Campaign-->
  @include('admin.includes.components.modal.create-campaign')
  <!--end::Modal - Create Campaign-->
  <!--begin::Modal - New Target-->
  @include('admin.includes.components.modal.new-target')
  <!--end::Modal - New Target-->
  <!--begin::Modal - New Card-->
  @include('admin.includes.components.modal.new-card')
  <!--end::Modal - New Card-->
  <!--begin::Modal - Bidding-->
  @include('admin.includes.components.modal.bidding')
  <!--end::Modal - Bidding-->
  <!--begin::Modal - Invite Friends-->
  @include('admin.includes.components.modal.invite-friend')
  <!--end::Modal - Invite Friend-->
  <!--begin::Modal - Top Up Wallet-->
  @include('admin.includes.components.modal.top-up-wallet')
  <!--end::Modal - Top Up Wallet-->
  <!--begin::Modal - Share & Earn-->
  @include('admin.includes.components.modal.share-earn')
  <!--end::Modal - Share & Earn-->
  <!--begin::Modal - Upgrade plan-->
  @include('admin.includes.components.modal.upgrade-plan')
  <!--end::Modal - Upgrade plan-->
  <!--begin::Modal - Users Search-->
  @include('admin.includes.components.modal.user-search')
  <!--end::Modal - Users Search-->
  <!--end::Modals-->

  <!--**********************************
        Scripts
    ***********************************-->
  <!--begin::Javascript-->
  <script>
    var hostUrl = "assets/";
  </script>
  <!--begin::Global Javascript Bundle(mandatory for all pages)-->
  <script src="{{ getFileVersion('/assets/admin/plugins/global/plugins.bundle.js') }} "></script>
  <script src="{{ getFileVersion('/assets/admin/js/scripts.bundle.js') }}"></script>
  <!--end::Global Javascript Bundle-->
  <!--begin::Vendors Javascript(used for this page only)-->
  <script src="{{ getFileVersion('/assets/admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
  <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
  <!--end::Vendors Javascript-->
  <!--begin::Custom Javascript(used for this page only)-->
  <script src="{{ getFileVersion('/assets/admin/js/custom/apps/ecommerce/catalog/products.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/js/custom/utilities/modals/create-campaign.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/js/custom/utilities/modals/new-target.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/js/custom/utilities/modals/new-card.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/js/custom/utilities/modals/bidding.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/js/custom/utilities/modals/top-up-wallet.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/js/widgets.bundle.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/js/custom/widgets.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/js/custom/apps/chat/chat.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/js/custom/utilities/modals/share-earn.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
  <script src="{{ getFileVersion('/assets/admin/js/custom/utilities/modals/users-search.js') }}"></script>
  <!--end::Custom Javascript-->
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

  <!--end::Javascript-->
  @stack('js')
</body>

</html>