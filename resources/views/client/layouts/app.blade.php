<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Client dashboard</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('client/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendors/base/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('client/vendors/flag-icon-css/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('client/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendors/jquery-bar-rating/fontawesome-stars-o.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendors/jquery-bar-rating/fontawesome-stars-o.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/style.css') }}">


    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('client/assets/images/favicon.png') }}" />
</head>

<body>

    <!-- ***** Content Area  ***** -->
    @yield('content')
    <!-- ***** Footer Area ***** -->
    @include('client.partials.footer')
    <!-- ***** Script Area ***** -->
    @include('client.partials.script')
</body>

</html>
