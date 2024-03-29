@extends('layouts.app')
@section('content')



    <!-- container-scroller -->
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
                                            <th>
                                                Delete
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $data)

                                            <tr>

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
                                                    {{ $data->created_at }}
                                                </td>

                                                <td class="table-danger">
                                                    <a href="{{ url('deletereservation', $data->id) }}">
                                                        <i class="bi bi-trash-fill"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-trash-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>




    <script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
    @include('flashy::message')


@endsection
