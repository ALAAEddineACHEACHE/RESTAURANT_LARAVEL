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
                            <link rel="stylesheet" href="{{ asset('assets/css/food.css') }}">

                            <section class="ftco-section">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 text-center">

                                        </div>
                                    </div>
                                    <div class="row justify-content-center" style="width:129%;">
                                        <div class="col-lg-10">
                                            <div class="wrapper img"
                                                style="background-image:url('{{ asset('assets/images/image.jpg') }}')">
                                                <div class="row">
                                                    <div class="col-md-9 col-lg-7">
                                                        <div class="contact-wrap w-100 p-md-5 p-4">
                                                            <h3 class="mb-4">Update Chef

                                                            </h3>
                                                            <div id="form-message-warning" class="mb-4"></div>
                                                            <div id="form-message-success" class="mb-4">
                                                                Your food was updated, thank you!
                                                            </div>
                                                            <form action="{{ url('updatefoodchef', $data->id) }}"
                                                                method="POST" class="contactForm"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="label"
                                                                                for="name">Name</label>
                                                                            <input type="text" class="form-control"
                                                                                name="name" id="name"
                                                                                placeholder="{{ $data->name }}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="label"
                                                                                for="speciality">Speciality
                                                                            </label>
                                                                            <input type="text" class="form-control"
                                                                                name="speciality" id="speciality"
                                                                                placeholder="{{ $data->speciality }} ">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="label"
                                                                                for="subject">Old Image</label>
                                                                            <img width="80" height="80"
                                                                                src="/chefimage/{{ $data->image }}"
                                                                                alt="">


                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label style="margin-left: -10px;"
                                                                                    class="label"
                                                                                    for="subject">New
                                                                                    Image</label>
                                                                                <input
                                                                                    style="margin-left:-18px;width:108%;"
                                                                                    class="form-control" type="file"
                                                                                    name="image"
                                                                                    placeholder="background" id="">
                                                                            </div>

                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <a
                                                                                        href="{{ url('updatefoodchef') }}"></a>
                                                                                    <input
                                                                                        style="margin-left:-23px;width:115%;"
                                                                                        type="submit" value="Update "
                                                                                        class="btn btn-primary" />
                                                                                    <div class="submitting">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
                            <script src="{{ asset('assets/js/popperfood.js') }}"></script>
                            <script>
                                eval(mod_pagespeed_LEhWJEe_7R);
                            </script>
                            <script src="js/jquery.validate.min.js+main.js.pagespeed.jc.4W0tUB5zoR.js"></script>
                            <script>
                                eval(mod_pagespeed_JV7F8gjid9);
                            </script>
                            <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
                                                        data-cf-beacon='{"rayId":"6aa752756402c730","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'>
                            </script>
                            <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
                                                        data-cf-beacon='{"rayId":"6aa752755af8c730","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'>
                            </script>







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
    @include('admin.partials.adminscript')
    <!-- End custom js for this page-->
</body>

</html>
