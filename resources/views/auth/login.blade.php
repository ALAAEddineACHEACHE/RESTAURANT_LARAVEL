@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-md-8 mt-5">
                <div class="card shadow rounded-3">
                    <div class="card-header">{{ __('Login') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
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
                            <div class="text-center">
                                <input type="submit" value="Login">
                            </div>
                            <div class="signup_link">
                                Not a member? <a href="{{ route('register') }}">Signup</a>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}

                            </div>







                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
