@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-md-8 mt-5">
                <div class="card shadow rounded-3">
                    <div class="card-header">{{ __('Register') }} </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="txt_field">
                                <input class="@error('name') is-invalid @enderror" type="text" name="name" id="name" required
                                    autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <label for="">Name</label>
                            </div>
                            <div class="txt_field">
                                <input class="@error('email') is-invalid @enderror" type="email" name="email" id="email"
                                    required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <label for="">Email</label>
                            </div>
                            <div class="txt_field">
                                <input class="@error('password') is-invalid @enderror" type="password" name="password"
                                    required autocomplete="current-password" autofocus>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="">Password</label>

                            </div>
                            <div class="txt_field">
                                <input class="@error('password_confirmation') is-invalid @enderror" type="password"
                                    id="password-confirm" name="password_confirmation" required
                                    autocomplete="current-password" autofocus>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="">ConfirmPassword</label>

                            </div>
                            <div class="txt_field">
                                <input class="@error('adresse') is-invalid @enderror" type="adresse" name="adresse" required
                                    autocomplete="current-password" autofocus>
                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="">Adresse</label>

                            </div>
                            <div class="txt_field">
                                <input class="@error('telephone') is-invalid @enderror" type="telephone" name="telephone"
                                    required autocomplete="current-password" autofocus>
                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="">Téléphone</label>

                            </div>
                            <div class="txt_field">
                                <select for="gender" id="gender" name="gender"
                                    class="@error('gender') is-invalid @enderror">
                                    <option value=""></option>
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>

                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </select>

                                <label for="">Gender</label>

                            </div>

                            <div class="text-center">
                                <input type="submit" value="Register">
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
