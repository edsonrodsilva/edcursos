<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-312x87.png" type="image/x-icon">
    <meta name="description" content="edcursos">

    <title>home</title>
    <link rel="stylesheet" href="{{ asset('site/assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/web/assets/mobirise-icons2/mobirise2.css') }} ">
    <link rel="stylesheet" href="{{ asset('site/assets/tether/tether.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/bootstrap/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/dropdown/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/theme/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/mobirise/css/mbr-additional.css') }}" type="text/css">
</head>
<body>


<!-- menu -->
@include('layouts.menu')
<!-- End of menu -->

<!-- Main Content -->
@yield('content')
<!-- End of Main Content -->

<!-- Footer -->
@include('layouts.footer')
<!-- End of Footer -->


<script src="{{ asset('site/assets/web/assets/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('site/assets/popper/popper.min.js') }}"></script>
<script src="{{ asset('site/assets/tether/tether.min.js') }}"></script>
<script src="{{ asset('site/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('site/assets/smoothscroll/smooth-scroll.js') }}"></script>
<script src="{{ asset('site/assets/dropdown/js/script.min.js') }}"></script>
<script src="{{ asset('site/assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
<script src="{{ asset('site/assets/theme/js/script.js') }}"></script>
</body>
</html>