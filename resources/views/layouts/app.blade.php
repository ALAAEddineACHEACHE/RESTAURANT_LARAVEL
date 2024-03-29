<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Klassy Cafe - Restaurant</title>
    <!-- ***** Links css Area ***** -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/templatemo-klassy-cafe.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lightbox.css') }}">


    @yield('css')

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    @include('partials.header')
    <!-- ***** Content Area  ***** -->
    @yield('content')
    <!-- ***** Footer Area ***** -->
    @include('partials.footer')
    <!-- ***** Script Area ***** -->
    @include('partials.script')
</body>

</html>
