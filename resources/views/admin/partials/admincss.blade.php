<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- ***** Links css Area ***** -->
    {{-- i think u need to do admin/assets/css to activate css on admin  --}}
    <link rel="stylesheet" href={{ asset('assetadmin/vendors/feather/feather.css') }}>
    <link rel="stylesheet" href={{ asset('assetadmin/vendors/mdi/css/materialdesignicons.min.css') }}>
    <link rel="stylesheet" href={{ asset('assetadmin/vendors/ti-icons/css/themify-icons.css') }}>
    <link rel="stylesheet" href={{ asset('assetadmin/vendors/typicons/typicons.css') }}>
    <link rel="stylesheet" href={{ asset('assetadmin/vendors/simple-line-icons/css/simple-line-icons.css') }}>
    <link rel="stylesheet" href={{ asset('assetadmin/vendors/css/vendor.bundle.base.css') }}>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href={{ asset('assetadmin/css/datatables.net-bs4/dataTables.bootstrap4.html') }}>
    <link rel="stylesheet" href={{ asset('assetadmin/js/select.dataTables.min.css') }}>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href={{ asset('assetadmin/css/vertical-layout-light/style.css') }}>
    <!-- endinject -->
    <link rel="shortcut icon" href={{ asset('assetadmin/images/favicon.png') }} />



</head>

<body>

    <!-- ***** Content Area  ***** -->
    @yield('content')
    <!-- ***** Footer Area ***** -->
    @include('admin.partials.adminfooter');
    <!-- ***** Script Area ***** -->
    @include('admin.partials.adminscript');



</body>

</html>
