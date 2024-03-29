<link rel="stylesheet" href="{{ asset('assets/css/templatemo-klassy-cafe.css') }}">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl-carousel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/showcart.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lightbox.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@include('partials.header')
<div id="top">
    {{-- <div class="table-responsive"> --}}

    <table class="table table-bordered text-center" style="background-color:#FC8D83;">
        <thead>
            <tr>
                <th>
                    Foodname
                </th>
                <th>
                    Price
                </th>
                <th>
                    Quantity
                </th>
                <th>
                    Total Price
                </th>
                <th>
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <form action="{{ url('orderconfirm') }}" method="POST">
                @csrf
                @foreach ($data as $data)
                    <tr>

                        <td>
                            <input type="text" name="foodname[]" value="{{ $data->title }}" hidden="" id="">
                            {{ $data->title }}

                        </td>
                        <td>

                            <input type="text" name="price[]" value="{{ $data->price }}" hidden="" id="">
                            {{ $data->price }} dh

                        </td>
                        <td>
                            <input type="text" name="quantity[]" value="{{ $data->quantity }}" hidden="" id="">
                            {{ $data->quantity }}

                        </td>
                        <td>
                            <input type="text" name="" value="{{ $data->quantity * $data->price }}" hidden="" id="">
                            {{ $data->quantity * $data->price }}
                        </td>

                @endforeach
                <td>
                    @foreach ($data2 as $data2)
                        <a style="margin-top: -8px;" href="{{ url('remove', $data2->id) }}"
                            class="btn btn-warning">Remove</a>
                    @endforeach

                </td>
                </tr>
        </tbody>

    </table>
</div>
{{-- </div>
</div> --}}

{{-- <div class="small-container cart-page">
        <table id="showproducts">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        {{-- <img src="{{ asset('admin/images/faces/face1.jpg') }}" alt="">
</div>
<div>
    <p>Loubya</p>
    <small>Price:100dh</small>
    <br>
    <a href="">Remove</a>
</div>
</td>
<td><input type="number" value="1" id=""></td>
<td>100 dh</td>
</tr>

<tr>
    <td>
        <div class="cart-info">
            {{-- <img src="{{ asset('admin/images/faces/face1.jpg') }}" alt="">
        </div>
        <div>
            <p>Loubya</p>
            <small>Price:100dh</small>
            <br>
            <a href="">Remove</a>
        </div>
    </td>
    <td><input type="number" value="1" id=""></td>
    <td>100 dh</td>
</tr>
<tr>
    <td>
        <div class="cart-info">
            {{-- <img src="{{ asset('admin/images/faces/face1.jpg') }}" alt="">
        </div>
        <div>
            <p>Loubya</p>
            <small>Price:100dh</small>
            <br>
            <a href="">Remove</a>
        </div>
    </td>
    <td><input type="number" value="1" id=""></td>
    <td>100 dh</td>
</tr>
<div class="totalprice">
    <table id="prices">
        <tr>
            <td>Subtotal</td>
            <td>200.0 dh</td>
        </tr>
        <tr>
            <td>Tax</td>
            <td>35dh</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>235 dh</td>
        </tr>
    </table>
</div>
</table>
</div> --}}














{{-- </div>
</div> --}}









<div align="center" style="padding: 10px;">
    <button type="button" id="order" class="btn btn-primary">Order Now</button>
</div>
<section class="ftco-section" id="appear" style="display:none">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Your Order Form</h3>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                    Your message was sent, thank you!
                                </div>
                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="phone">Phone</label>
                                                <input type="number" class="form-control" name="phone"
                                                    placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="adresse">Adresse</label>
                                                <input type="text" class="form-control" name="adresse"
                                                    placeholder="adresse">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <input type="submit" value="Send Order" class="btn btn-primary">
                                                <button id="close" class="btn btn-danger">Close</button>
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                <h3>Order your products</h3>
                                <p class="mb-4">Order anything you want !</p>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Address:</span> <a href="#">Bank Rabat</a>

                                        </p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Phone:</span> <a href="tel://1234567920">+212 0659552810</a></p>
                                    </div>
                                </div>

                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Website</span> <a href="#">Klassy.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('#order').click(
        function() {
            $('#appear').show();
        }
    )
    $('#close').click(
        function() {
            $('#appear').hide();
        }
    )
</script>
<script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
@include('flashy::message')
