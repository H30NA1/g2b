<html class="w-mod-js wf-opensans-n3-active wf-opensans-n4-active wf-opensans-n6-active wf-opensans-n7-active wf-opensans-n8-active wf-outfit-n1-active wf-outfit-n2-active wf-outfit-n3-active wf-outfit-n4-active wf-outfit-n5-active wf-outfit-n6-active wf-outfit-n7-active wf-outfit-n8-active wf-outfit-n9-active w-mod-ix wf-opensans-i4-active wf-opensans-i8-active wf-opensans-i3-active wf-opensans-i7-active wf-opensans-i6-active wf-active">

</html>

<head>
    <style data-emotion="css" data-s=""></style>
    <style>
        .wf-force-outline-none[tabindex="-1"]:focus {
            outline: none;
        }
    </style>
    <meta charset="utf-8">
    <title>Harron</title>
    <meta content="Go To Bytes" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{ getFileVersion('/assets/web/css/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic%7COutfit:100,200,300,regular,500,600,700,800,900" media="all">
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "Outfit:100,200,300,regular,500,600,700,800,900"]
            }
        });
    </script>
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="#" rel="shortcut icon" type="image/x-icon">
    <link href="#" rel="apple-touch-icon">
    <style data-styled="active" data-styled-version="5.3.8"></style>
    @stack('css')
</head>

<body>
    @include('web.includes.header')
    @yield('content')
    @include('web.includes.footer')
    <script src="{{ getFileVersion('/assets/web/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ getFileVersion('/assets/web/js/script.js') }}" type="text/javascript"></script>
    @stack('js')
</body>

</html>