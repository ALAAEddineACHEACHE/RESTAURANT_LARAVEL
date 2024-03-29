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
                            <h4 class="card-title" style="color:#27367f;">Available Orders</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
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
                                                Total Price
                                            </th>
                                            <th>
                                                Created_at
                                            </th>
                                            <th>
                                                Action Delete
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ordersdata as $ordersdata)
                                            <tr>
                                                <td>{{ $ordersdata->id }}</td>
                                                <td>
                                                    {{ $ordersdata->name }}
                                                </td>
                                                <td>
                                                    {{ $ordersdata->phone }}
                                                </td>
                                                <td>
                                                    {{ $ordersdata->adresse }}
                                                </td>
                                                <td>
                                                    {{ $ordersdata->foodname }}
                                                </td>
                                                <td>
                                                    {{ $ordersdata->price }}
                                                </td>
                                                <td>
                                                    {{ $ordersdata->quantity }}
                                                </td>
                                                <td>
                                                    {{ $ordersdata->price * $ordersdata->quantity }}
                                                </td>
                                                <td>
                                                    {{ $ordersdata->created_at->diffForHumans() }}
                                                </td>
                                                <td>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-archive-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z" />
                                                    </svg>
                                                    <i class="bi bi-archive-fill"></i> <a class="text-danger"
                                                        href="{{ url('deleteorder', $ordersdata->id) }}"
                                                        style="margin-left:20px;">Delete</a>
                                                </td>



                                            </tr>

                                    </tbody>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <span>

                    {{ $Order->links() }}

                </span>
                <style>
                    .w-5 {
                        height: 50px;
                    }

                    .flex-1 {
                        display: none;
                    }

                </style>
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
    <!-- End custom js for this page-->
    <script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
    @include('flashy::message')
</body>



</html>
