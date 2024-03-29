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
                            <h4 class="card-title" style="color:#27367f;">Available Users</h4>
                            <div class="table-responsive">
                                <table style="background-color:rgb(244, 245, 247);" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>
                                                First name
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Adresse
                                            </th>
                                            <th>
                                                Numéro de Téléphone
                                            </th>
                                            <th>
                                                Created_at
                                            </th>
                                            <th>
                                                Action
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $data)
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>
                                                    {{ $data->name }}
                                                </td>
                                                <td>
                                                    {{ $data->email }}
                                                </td>
                                                <td>
                                                    {{ $data->adresse }}
                                                </td>
                                                <td>
                                                    {{ $data->telephone }}
                                                </td>
                                                <td>
                                                    {{ $data->created_at->diffForHumans() }}
                                                </td>
                                                @if ($data->user_type == '0')
                                                    <td>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-person-x-fill"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z" />
                                                        </svg>
                                                        <i class="bi bi-person-x-fill"></i>
                                                        <a href="{{ url('deleteuser', $data->id) }}"
                                                            style="margin-left:20px;">Delete</a>
                                                    </td>
                                                @else
                                                    <td class="text-danger">Not
                                                        allowed</td>
                                                @endif
                                            </tr>

                                    </tbody>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <span>

                    {{ $User->links() }}

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
