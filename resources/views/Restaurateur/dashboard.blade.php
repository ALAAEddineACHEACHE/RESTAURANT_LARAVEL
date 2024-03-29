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

@include('partials.header')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Reservations Table</h4>
                        <p class="card-description">
                            Restaurateur Commandes
                        </p>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>

                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Phone
                                        </th>
                                        <th>
                                            Adresse
                                        </th>
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
                                            Total
                                        </th>
                                        <th>
                                            Created_at
                                        </th>
                                        <th>
                                            OrderReady?
                                        </th>
                                        <th>
                                            Delete
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Ordersdata as $Ordersdata)
                                        <tr>
                                            <td class="table-info">{{ $Ordersdata->name }}</td>
                                            <td class="table-info">{{ $Ordersdata->phone }}</td>
                                            <td class="table-info">{{ $Ordersdata->adresse }}</td>
                                            <td class="table-warning">{{ $Ordersdata->foodname }}</td>
                                            <td class="table-info">{{ $Ordersdata->price }} dh</td>
                                            <td class="table-info">{{ $Ordersdata->quantity }}</td>
                                            <td class="table-info">
                                                {{ $Ordersdata->quantity * $Ordersdata->price }} dh</td>
                                            <td class="table-success">{{ $Ordersdata->created_at }}</td>
                                            <td class="table-danger"><input name="readyorder"
                                                    value="Order not ready yet .">
                                            </td>
                                            <td class="table-danger"><a
                                                    href="{{ url('removeorder', $Ordersdata->id) }}"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                        <path
                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                    </svg><i class="bi bi-x"></i>
                                                </a></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
                            @include('flashy::message')
