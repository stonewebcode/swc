<!DOCTYPE HTML>
<html>
<head>
    <title>Stone Web Code</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>

</head>
<body class="homepage">

<div id="page-wrapper">

    <div id="email-wrapper">

        @yield('content')


    </div><!-- /email-wrapper -->
</div>
<!-- /page-wrapper -->

<!-- Scripts -->

<script src="{{ asset('js/skel.min.js') }}"></script>
<script src="{{ asset('js/skel-viewport.min.js') }}"></script>
</body>
</html>
