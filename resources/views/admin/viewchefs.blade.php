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
            <div class="row" style="margin-left: 100px; width:160%;">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 style="color: red;" class="card-title">Chefs of the Restaurant !</h4>

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Speciality</th>
                                            <th>Update Action</th>
                                            <th>Delete Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $data)
                                            <tr>
                                                <td style="color: black">{{ $data->id }}</td>
                                                <td style="color: black">{{ $data->name }}</td>
                                                <td style="height: 100px;width:100px;"><img
                                                        src="chefimage/{{ $data->image }}" alt="imagenotrecognized"
                                                        style="height: 100px;width:100px;">
                                                </td>
                                                <td style="color: black">{{ $data->speciality }}</td>
                                                <td><a style="color: green;"
                                                        href="{{ url('updatechef', $data->id) }}">
                                                        <i class="bi bi-pencil-square"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-pencil-square"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg>


                                                        Update</a>
                                                </td>
                                                <td><a style="color: red;" href="{{ url('deletechef', $data->id) }}">
                                                        <i class="bi bi-trash-fill text-danger"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-trash-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                        </svg>
                                                        Delete</a>
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

                    {{ $foodchefs->links() }}

                </span>
                <style>
                    .w-5 {
                        height: 50px;
                    }

                    .flex-1 {
                        display: none;
                    }

                </style>
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
