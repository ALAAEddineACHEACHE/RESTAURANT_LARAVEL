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

    @include('admin.partials.navbar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body" style="background-color:rgb(244, 245, 247);">
                            <h4 class="card-title">Admin Updateform</h4>
                            <p class="card-description">
                                UpdateForm
                            </p>
                            <form class="forms-sample" method="POST" action="{{ route('profile.edit', $user->id) }}"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Username</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        id="exampleInputUsername1" placeholder="Username">
                                    @error('name')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        id="exampleInputEmail1" placeholder="Email">
                                    @error('email')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="number" name="telephone"
                                        class="form-control @error('telephone') is-invalid @enderror"
                                        id="exampleInputEmail1" placeholder="Phone">
                                    @error('telephone')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">New Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" id="exampleInputPassword1" placeholder="*********">
                                    @error('password')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                    <input type="password" name="confirm_password"
                                        class="form-control @error('confirm_password') is-invalid @enderror"
                                        id="exampleInputConfirmPassword1" placeholder="********">
                                    @error('password')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div> --}}
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
    @include('flashy::message')
