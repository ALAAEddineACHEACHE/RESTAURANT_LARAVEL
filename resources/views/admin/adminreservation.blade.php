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
                <div class="col-lg-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Reservations Table</h4>
                            <p class="card-description">
                                Admin Reservations
                            </p>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Phone
                                            </th>
                                            <th>
                                                Guest
                                            </th>
                                            <th>
                                                Date
                                            </th>
                                            <th>
                                                Time
                                            </th>
                                            <th>
                                                Message
                                            </th>
                                            <th>
                                                Created_at
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $data)

                                            <tr>
                                                <td class="table-info">
                                                    {{ $data->id }}
                                                </td>
                                                <td class="table-success">
                                                    {{ $data->name }}
                                                </td>
                                                <td class="table-info">
                                                    {{ $data->email }}
                                                </td>
                                                <td class="table-warning">
                                                    {{ $data->phone }}
                                                </td>
                                                <td class="table-success">
                                                    {{ $data->guest }}
                                                </td>
                                                <td class="table-warning">
                                                    {{ $data->date }}
                                                </td>
                                                <td class="table-danger">
                                                    {{ $data->time }}
                                                </td>
                                                <td class="table-info">
                                                    {{ $data->message }}
                                                </td>
                                                <td class="table-warning">
                                                    {{ $data->created_at->diffForHumans() }}
                                                </td>
                                            </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <span>

                    {{ $reservation->links() }}

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
</body>



</html>
