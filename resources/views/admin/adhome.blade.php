@extends('admin.layouts.appl');
@section('content')
    @include('admin.partials.header')
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    @include('admin.partials.navbar');
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="d-sm-flex align-items-center justify-content-between border-bottom">

                        </div>
                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="statistics-details d-flex align-items-center justify-content-between">
                                            <div class="d-none d-md-block">
                                                <p class="statistics-title">Orders</p>
                                                <h3 class="rate-percentage">{{ $orderscount }}</h3>
                                                <p class="text-danger d-flex"><i
                                                        class="mdi mdi-menu-down"></i><span>-1%</span></p>
                                            </div>
                                            <div>
                                                <p class="statistics-title">Reservations</p>
                                                <h3 class="rate-percentage">{{ $reservationscount }}</h3>
                                                <p class="text-success d-flex"><i
                                                        class="mdi mdi-menu-up"></i><span>+20%</span></p>
                                            </div>
                                            <div>
                                                <p class="statistics-title">Chiefs of the restaurant</p>
                                                <h3 class="rate-percentage">{{ $chiefscount }}</h3>
                                                <p class="text-success d-flex"><i
                                                        class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                                            </div>
                                            <div>
                                                <p class="statistics-title">Foodmenu</p>
                                                <h3 class="rate-percentage">{{ $foodscount }}</h3>
                                                <p class="text-success d-flex"><i
                                                        class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                                            </div>

                                            <div>
                                                <p class="statistics-title">Users</p>
                                                <h3 class="rate-percentage">{{ $userscount }}</h3>
                                                <p class="text-danger d-flex"><i
                                                        class="mdi mdi-menu-down"></i><span>-0.5%</span>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 d-flex flex-column">
                                        <div class="row flex-grow">
                                            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex justify-content-between align-items-start">
                                                            <div>
                                                                <h4 class="card-title card-title-dash">
                                                                    Performance Line Chart</h4>
                                                                <h5 class="card-subtitle card-subtitle-dash">
                                                                    This is the performance of envolvement
                                                                    of the restaurant this week !</h5>
                                                            </div>
                                                            <div id="performance-line-legend"></div>
                                                        </div>
                                                        <div class="chartjs-wrapper mt-5">
                                                            <canvas id="performaneLine"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 d-flex flex-column">
                                        <div class="row flex-grow">
                                            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                                <div class="card bg-primary card-rounded">
                                                    <div class="card-body pb-0">
                                                        <h4 class="card-title card-title-dash text-white mb-4">
                                                            Status Summary</h4>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="status-summary-ight-white mb-1">
                                                                    Closed Value</p>
                                                                <h2 class="text-info">357</h2>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="status-summary-chart-wrapper pb-4">
                                                                    <canvas id="status-summary"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                                                    <div class="circle-progress-width">
                                                                        <div id="totalVisitors"
                                                                            class="progressbar-js-circle pr-2">
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <p class="text-small mb-2">Total
                                                                            Visitors</p>
                                                                        <h4 class="mb-0 fw-bold">31.80%</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <div class="circle-progress-width">
                                                                        <div id="visitperday"
                                                                            class="progressbar-js-circle pr-2">
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <p class="text-small mb-2">Visits per
                                                                            day</p>
                                                                        <h4 class="mb-0 fw-bold">200</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 d-flex flex-column">
                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex justify-content-between align-items-start">
                                                            <div>
                                                                <h4 class="card-title card-title-dash">Earnings of the
                                                                    Restaurant</h4>
                                                                <p class="card-subtitle card-subtitle-dash">
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                                                        type="button" id="dropdownMenuButton2"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        This year
                                                                    </button>
                                                                    {{-- <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton2">
                                                                        <h6 class="dropdown-header">Settings
                                                                        </h6>
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another
                                                                            action</a>
                                                                        <a class="dropdown-item" href="#">Something
                                                                            else here</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Separated
                                                                            link</a>
                                                                    </div> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-sm-flex align-items-center mt-1 justify-content-between">
                                                            <div
                                                                class="d-sm-flex align-items-center mt-4 justify-content-between">
                                                                <h2 class="me-2 fw-bold">360,000.00 </h2>
                                                                <h4 class="me-2">DH</h4>
                                                                <h4 class="text-success">(+1.37%)</h4>
                                                            </div>
                                                            <div class="me-3">
                                                                <div id="marketing-overview-legend"></div>
                                                            </div>
                                                        </div>
                                                        <div class="chartjs-bar-wrapper mt-3">
                                                            <canvas id="marketingOverview"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex justify-content-between align-items-start">
                                                            <div>
                                                                <h4 class="card-title card-title-dash">Pending
                                                                    Requests</h4>
                                                                <p class="card-subtitle card-subtitle-dash">You
                                                                    have 50+ new requests</p>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary btn-lg text-white mb-0 me-0"
                                                                    type="button"><i class="mdi mdi-account-plus"></i>Add
                                                                    new member</button>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive  mt-1">
                                                            <table class="table select-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </th>
                                                                        <th>Customer</th>
                                                                        <th>Company</th>
                                                                        <th>Progress</th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex ">
                                                                                <img src="{{ asset('admin/images/faces/face1.jpg') }}"
                                                                                    alt="">
                                                                                <div>
                                                                                    <h6>Brandon Washington</h6>
                                                                                    <p>Head admin</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6>Company name 1</h6>
                                                                            <p>company type</p>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                    <p class="text-success">
                                                                                        79%</p>
                                                                                    <p>85/162</p>
                                                                                </div>
                                                                                <div class="progress progress-md">
                                                                                    <div class="progress-bar bg-success"
                                                                                        role="progressbar"
                                                                                        style="width: 85%"
                                                                                        aria-valuenow="25" aria-valuemin="0"
                                                                                        aria-valuemax="100">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-warning">
                                                                                In progress</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <img src="{{ asset('admin/images/faces/face2.jpg') }}"
                                                                                    alt="">
                                                                                <div>
                                                                                    <h6>Laura Brooks</h6>
                                                                                    <p>Head admin</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6>Company name 1</h6>
                                                                            <p>company type</p>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                    <p class="text-success">
                                                                                        65%</p>
                                                                                    <p>85/162</p>
                                                                                </div>
                                                                                <div class="progress progress-md">
                                                                                    <div class="progress-bar bg-success"
                                                                                        role="progressbar"
                                                                                        style="width: 65%"
                                                                                        aria-valuenow="65" aria-valuemin="0"
                                                                                        aria-valuemax="100">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-warning">
                                                                                In progress</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <img src="{{ asset('admin/images/faces/face3.jpg') }}"
                                                                                    alt="">
                                                                                <div>
                                                                                    <h6>Wayne Murphy</h6>
                                                                                    <p>Head admin</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6>Company name 1</h6>
                                                                            <p>company type</p>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                    <p class="text-success">
                                                                                        65%</p>
                                                                                    <p>85/162</p>
                                                                                </div>
                                                                                <div class="progress progress-md">
                                                                                    <div class="progress-bar bg-warning"
                                                                                        role="progressbar"
                                                                                        style="width: 38%"
                                                                                        aria-valuenow="38" aria-valuemin="0"
                                                                                        aria-valuemax="100">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-warning">
                                                                                In progress</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <img src="{{ asset('admin/images/faces/face4.jpg') }}"
                                                                                    alt="">
                                                                                <div>
                                                                                    <h6>Matthew Bailey</h6>
                                                                                    <p>Head admin</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6>Company name 1</h6>
                                                                            <p>company type</p>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                    <p class="text-success">
                                                                                        65%</p>
                                                                                    <p>85/162</p>
                                                                                </div>
                                                                                <div class="progress progress-md">
                                                                                    <div class="progress-bar bg-danger"
                                                                                        role="progressbar"
                                                                                        style="width: 15%"
                                                                                        aria-valuenow="15" aria-valuemin="0"
                                                                                        aria-valuemax="100">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-danger">
                                                                                Pending</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <img src="{{ asset('admin/images/faces/face5.jpg') }}"
                                                                                    alt="">
                                                                                <div>
                                                                                    <h6>Katherine Butler</h6>
                                                                                    <p>Head admin</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6>Company name 1</h6>
                                                                            <p>company type</p>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                    <p class="text-success">
                                                                                        65%</p>
                                                                                    <p>85/162</p>
                                                                                </div>
                                                                                <div class="progress progress-md">
                                                                                    <div class="progress-bar bg-success"
                                                                                        role="progressbar"
                                                                                        style="width: 65%"
                                                                                        aria-valuenow="65" aria-valuemin="0"
                                                                                        aria-valuemax="100">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-success">
                                                                                Completed</div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="row flex-grow">

                                            <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <h4 class="card-title card-title-dash">Activities
                                                            </h4>
                                                            <p class="mb-0">20 finished, 5 remaining
                                                            </p>
                                                        </div>
                                                        <ul class="bullet-line-list">
                                                            <li>
                                                                <div class="d-flex justify-content-between">
                                                                    <div><span class="text-light-green">Ben
                                                                            Tossell</span> assign you a task
                                                                    </div>
                                                                    <p>Just now</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex justify-content-between">
                                                                    <div><span class="text-light-green">Oliver
                                                                            Noah</span> assign you a task</div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex justify-content-between">
                                                                    <div><span class="text-light-green">Jack
                                                                            William</span> assign you a task
                                                                    </div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex justify-content-between">
                                                                    <div><span class="text-light-green">Leo
                                                                            Lucas</span> assign you a task</div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex justify-content-between">
                                                                    <div><span class="text-light-green">Thomas
                                                                            Henry</span> assign you a task</div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex justify-content-between">
                                                                    <div><span class="text-light-green">Ben
                                                                            Tossell</span> assign you a task
                                                                    </div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex justify-content-between">
                                                                    <div><span class="text-light-green">Ben
                                                                            Tossell</span> assign you a task
                                                                    </div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="list align-items-center pt-3">
                                                            <div class="wrapper w-100">
                                                                <p class="mb-0">
                                                                    <a href="#" class="fw-bold text-primary">Show
                                                                        all
                                                                        <i class="mdi mdi-arrow-right ms-2"></i></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="col-lg-4 d-flex flex-column">
                                        <div class="row flex-grow">

                                        </div>
                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center mb-3">
                                                                    <h4 class="card-title card-title-dash">Type
                                                                        By Amount</h4>
                                                                </div>
                                                                <canvas class="my-auto" id="doughnutChart"
                                                                    height="200"></canvas>
                                                                <div id="doughnut-chart-legend" class="mt-5 text-center">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row flex-grow">

                                        </div>
                                        <div class="row flex-grow">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!--footer-->
        {{-- @include('admin.partials.adminfooter'); --}}
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    {{-- @include('admin.partials.adminscript') --}}

    <script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
    @include('flashy::message')
@endsection
