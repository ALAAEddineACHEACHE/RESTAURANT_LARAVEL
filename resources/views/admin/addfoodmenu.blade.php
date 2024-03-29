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
                            <style>
                                /* h1 {
                                            color: blue;
                                            font-family: Caflisch Script, Adobe Poetica, Sanvito, Ex Ponto, Snell Roundhand, Zapf-Chancery, cursive;
                                            font-weight: bold;
                                            text-align: center;
                                        }

                                        h2 {
                                            color: orange;
                                            font-family: Caflisch Script, Adobe Poetica, Sanvito, Ex Ponto, Snell Roundhand, Zapf-Chancery, cursive;
                                            font-weight: bold;
                                            text-align: center;
                                        }

                                        form {
                                            border: 1px solid #F4F5F7;
                                            padding: 10px;
                                            background-color: #F4F5F7;
                                        }

                                        p {
                                            width: 900px;
                                            padding-left: 305px;
                                            text-align: left;
                                            vertical-align: top;
                                        }

                                        label.left {
                                            float: left;
                                            margin-left: -305px;
                                            font-weight: bold;

                                        }

                                        input {
                                            width: 40%;
                                            color: blue;
                                            background: transparent;
                                            border-radius: 40px;
                                        }

                                        input[type='submit'] {
                                            margin-left: 200px;
                                            color: red;
                                            background-color: blue;
                                        } */

                            </style>
                            {{-- <h1>Add A New Food to the Menu</h1>

                                    <form action="{{ url('uploadfood') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <p>
                                            <label for="prenom" class="left">Title :</label>
                                            <input name="title" id="prenom" type="text" size="30" maxlength="30"
                                                required />
                                        </p>
                                        <p>
                                            <label for="price" class="left">Price : </label>
                                            <input name="price" id="price" type="number" size="30" maxlength="30"
                                                required />
                                        </p>
                                        <p>
                                            <label for="" class="left">Image</label>
                                            <input type="file" name="image" required />

                                        </p>


                                        <p>
                                            <label for="description" class="left">Description :
                                            </label>
                                            <textarea name="description" id="description" cols="30" rows="5">
                                            </textarea>

                                        </p>

                                        <input type="submit" value="Save"> --}}
                            {{-- new form --}}




                            {{-- <link
                                        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap"
                                        rel="stylesheet">
                                    <link rel="stylesheet" href="{{ asset('assets/css/addfood.css') }}" />


                                    <title>Contact Form </title>

                                    <div class="content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-5 mr-auto">
                                                    <h3 class="mb-3">Let's work together</h3>
                                                    <p>
                                                        <img h src="{{ asset('assets/images/food1.jpg') }}" alt="">
                                                    </p>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="box">
                                                        <h3 class="heading">How Can We Help?</h3>
                                                        <form class="mb-5" method="post" id="contactForm"
                                                            name="contactForm">
                                                            <div class="row">
                                                                <div class="col-md-6 form-group">
                                                                    <label for="name" class="col-form-label">Name
                                                                        *</label>
                                                                    <input type="text" class="form-control"
                                                                        name="name" id="name" placeholder="Your name">
                                                                </div>
                                                                <div class="col-md-6 form-group">
                                                                    <label for="name"
                                                                        class="col-form-label">Organization</label>
                                                                    <input type="text" class="form-control"
                                                                        name="organization" id="organization"
                                                                        placeholder="Your organization">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 form-group">
                                                                    <label for="email" class="col-form-label">Email
                                                                        *</label>
                                                                    <input type="text" class="form-control"
                                                                        name="email" id="email"
                                                                        placeholder="Your email address">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 form-group">
                                                                    <label for="message" class="col-form-label">Project
                                                                        Description
                                                                        *</label>
                                                                    <textarea class="form-control" name="message"
                                                                        id="message" cols="30" rows="7"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-6 form-group">
                                                                    <label for="budget"
                                                                        class="col-form-label">Budget</label>
                                                                    <select class="custom-select" id="budget"
                                                                        name="budget">
                                                                        <option selected>Choose...</option>
                                                                        <option value="$1000 below">
                                                                            < $1,000</option>
                                                                        <option value="$2,000 - $5,000">$2,000 -
                                                                            $5,000</option>
                                                                        <option value="$5,000 - $15,000">$5,000 -
                                                                            $15,000</option>
                                                                        <option value="$15,000 - $25,000">$15,000 -
                                                                            $25,000</option>
                                                                        <option value="$25,000 >">$25,000 ></option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6 form-group">
                                                                    <label for="message" class="col-form-label">Target
                                                                        Lunch</label>
                                                                    <input type="text" class="form-control"
                                                                        name="date" id="date"
                                                                        placeholder="Example: January 15th">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="submit" value="Send Message"
                                                                        class="btn btn-block btn-primary rounded-0 py-2 px-4">
                                                                    <span class="submitting"></span>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <div id="form-message-warning mt-4"></div>
                                                        <div id="form-message-success">
                                                            Your message was sent, thank you!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>___scripts_1___
                                        <script src="js/popper.min.js+bootstrap.min.js.pagespeed.jc.s0yvW9TxCd.js"></script>___scripts_3___
                                        <script>
                                            eval(mod_pagespeed_VuL2k5AY52);
                                        </script>
                                        <script src="js/jquery.validate.min.js+main.js.pagespeed.jc.WrPipgXVU4.js"></script>___scripts_6___
                                        <script>
                                            eval(mod_pagespeed_fGg0jncaGr);
                                        </script>
                                        <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
                                                                                data-cf-beacon='{"rayId":"6aa95dfba76cc724","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'>
                                        </script>
                                        <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
                                                                                data-cf-beacon='{"rayId":"6aa95dfb8f1cc724","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'>
                                        </script> --}}


                            <title>Contact Form 05</title>
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
                                                            <h3>ADD FOOD to the menu</h3>

                                                            <div id="form-message-warning" class="mb-4"></div>
                                                            <div id="form-message-success" class="mb-4">
                                                                Your message was sent, thank you!
                                                            </div>

                                                            <form method="post" action="{{ url('uploadfood') }}"
                                                                enctype="multipart/form-data" id="contactForm"
                                                                name="contactForm" class="contactForm">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                name="title" id="title"
                                                                                placeholder="Title">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="number" class="form-control"
                                                                                name="price" id="price"
                                                                                placeholder="Price">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">

                                                                            <input type="file" name="image"
                                                                                class="form-control" id="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <textarea name="description"
                                                                                class="form-control" id="description"
                                                                                cols="30" rows="4"
                                                                                placeholder="Description"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="submit" value="Add Food"
                                                                                class="btn btn-primary">
                                                                            <div class="submitting"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 d-flex align-items-stretch">
                                                        <div class="info-wrap w-100 p-5 img"
                                                            style="background-image:url('{{ asset('assets/images/image3.jpg') }}')">
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
                            <script>
                                eval(mod_pagespeed_bMqMdaPoN8);
                            </script>
                            <script src="js/jquery.validate.min.js+main.js.pagespeed.jc.IB53GaMrCM.js"></script>
                            <script>
                                eval(mod_pagespeed_Z1N0fRzKXs);
                            </script>
                            <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
                                                        data-cf-beacon='{"rayId":"6ab05d1806d7c72c","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'>
                            </script>
                            <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
                                                        data-cf-beacon='{"rayId":"6ab05d17eb41c72c","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'>
                            </script>

























                        </div>

                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                @include('admin.partials.adminfooter')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.partials.adminscript')
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/select2/select2.min.js"></script>

    <script src="js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"6aa97be92397c724","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'>
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"6aa97be8ec9fc724","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'>
    </script>
    <!-- End custom js for this page-->
</body>



</html>
