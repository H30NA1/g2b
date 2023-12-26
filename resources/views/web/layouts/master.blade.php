<!DOCTYPE html>
<html lang="ja">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="keywords" content=""/>
    <meta name="description" content="" />
    <title>G2B</title>
    <link rel="stylesheet" href="{{ getFileVersion('assets/web/css/index.css') }}" media="screen" />
    <script class="u-script" type="text/javascript" src="{{ getFileVersion('assets/web/js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ getFileVersion('assets/web/js/index.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 6.1.3, nicepage.com" />
    <meta name="referrer" content="origin" />
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Cantarell:400,400i,700,700i"/>
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"/>

    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "{{ getFileVersion('assets/web/images/default-logo.png') }}"
      }
    </script>
    <meta name="theme-color" content="#5891d2" />
    <meta property="og:title" content="Home" />
    <meta property="og:type" content="website" />
    <meta data-intl-tel-input-cdn-path="intlTelInput/" />
    @stack('css')
  </head>

<body class="@yield('bodyClass')">
    <!-- MAIN BODY -->
    @include('web.includes.navbar')

    @yield('content')
    <!-- /END MAIN BODY -->
    <!-- FOOTER -->
    @include('web.includes.footer')
    <!-- /END FOOTER -->
    <!-- SCRIPT -->

    <!-- Structured data settings -->

    <!-- /END SCRIPT -->
    @stack('js')
</body>

</html>
