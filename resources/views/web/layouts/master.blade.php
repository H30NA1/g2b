<!DOCTYPE html>
<html lang="ja">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="utf-8" />
    <meta name="keywords" content="G2B" />
    <meta name="description" content="Go To Bytes" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ getFileVersion('assets/web/css/index.css') }}" media="screen" />
    <script class="u-script" type="text/javascript" src="{{ getFileVersion('assets/web/js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ getFileVersion('assets/web/js/index.js') }}" defer=""></script>
    <meta name="robots" content="INDEX,FOLLOW">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" />
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" />

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "{{ getFileVersion('assets/web/images/logo.png') }}"
        }
    </script>
    <meta name="theme-color" content="#478ac9" />
    <meta property="og:title" content="Home" />
    <meta property="og:type" content="website" />
    <meta data-intl-tel-input-cdn-path="intlTelInput/" />
    @stack('css')
</head>

<body class="@yield('bodyClass')">
    <!-- MAIN BODY -->
    <section class="@yield('sectionClass')">
        @include('web.includes.navbar')

        @yield('content')
    </section>
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