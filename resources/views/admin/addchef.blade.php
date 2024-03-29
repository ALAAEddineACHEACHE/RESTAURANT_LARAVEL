<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    @include('admin.partials.admincss')
    @include('admin.partials.header')
</head>

<body>

    <!-- partial -->
    <!-- partial:../../partials/_sidebar.html -->
    @include('admin.partials.navbar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet'
                                type='text/css'>
                            <link rel="stylesheet"
                                href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                            <link rel="stylesheet" href="{{ asset('assets/css/addfood.css') }}">

                            <section class="ftco-section">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 text-center mb-5">
                                            <h2 class="heading-section"></h2>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <div class="wrapper">
                                                <div class="row no-gutters">
                                                    <div class="col-lg-6">
                                                        <div class="contact-wrap w-100 p-md-5 p-4">
                                                            <h3>ADD A New Chef</h3>

                                                            <div id="form-message-warning" class="mb-4"></div>
                                                            <div id="form-message-success" class="mb-4">
                                                                Your message was sent, thank you!
                                                            </div>

                                                            <form method="POST" action="{{ url('uploadchef') }}"
                                                                enctype="multipart/form-data" id="contactForm"
                                                                class="contactForm">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">

                                                                            <input type="file" name="image"
                                                                                class="form-control" id="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                name="name" id="name"
                                                                                placeholder="Name *">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                name="speciality" id="speciality"
                                                                                placeholder="Speciality *">
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="submit" value="Add Chef"
                                                                                class="btn btn-success">
                                                                            <div class="submitting"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 d-flex align-items-stretch">
                                                        <div class="info-wrap w-100 p-5 img"
                                                            style="background-image:url('{{ asset('assets/images/addchef.jpg') }}')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            {{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
                            {{-- <script src="js/popper.js+bootstrap.min.js.pagespeed.jc.0XK2yqcqw9.js"></script> --}}
                            {{-- <script>
                                        eval(mod_pagespeed_bMqMdaPoN8);
                                    </script>
                                    <script src="js/jquery.validate.min.js+main.js.pagespeed.jc.IB53GaMrCM.js"></script>
                                    <script>
                                        eval(mod_pagespeed_Z1N0fRzKXs);
                                    </script> --}}
                            {{-- <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
                                                                        data-cf-beacon='{"rayId":"6ab05d1806d7c72c","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'>
                                    </script>
                                    <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
                                                                        data-cf-beacon='{"rayId":"6ab05d17eb41c72c","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'>
                                    </script> --}}

                        </div>

                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                {{-- @include('admin.partials.adminfooter') --}}
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    {{-- @include('admin.partials.adminscript') --}}
    {{-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

            <script src="vendor/bootstrap/js/popper.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

            <script src="vendor/select2/select2.min.js"></script> --}}

    {{-- <script src="js/main.js"></script> --}}

    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> --}}
    {{-- <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', 'UA-23581568-13');
            </script> --}}
    {{-- <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
                        data-cf-beacon='{"rayId":"6aa97be92397c724","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'>
            </script>
            <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
                        data-cf-beacon='{"rayId":"6aa97be8ec9fc724","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'>
            </script> --}}
    <!-- End custom js for this page-->
</body>



</html>
