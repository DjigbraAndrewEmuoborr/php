@extends('layouts.master')

@section('title', 'Login')

@section('content')

<!-- Page Content-->
<div class="authincation section-padding">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-xl-5 col-md-6">
                <div class="mini-logo text-center my-4">
                    <a href="{{ route("homepage") }}"><img src="{{ asset("tendex/images/logo.png") }}" alt="Logo"></a>
                    <h4 class="card-title mt-5">Sign in to {{ config('app.name') }}</h4>
                </div>
                <div class="auth-form card">
                    <div class="card-body">                    
                    <form class="signin_validate row g-3" method="POST" action="{{ route('login') }}">
                        @csrf

                        @if (!empty(session('error')))
                        <div class="alert alert-danger alert-dismissible">
                            <strong>{{ session('error') }}</strong>
                        </div>
                        @endif
                        @if ($errors->has('email'))
                        <div class="alert alert-danger alert-dismissible">
                            <strong>{{ $errors->first('email') }}</strong>
                        </div>
                        @endif
                        @if ($errors->has('password'))
                        <div class="alert alert-danger alert-dismissible">
                            <strong>{{ $errors->first('password') }}</strong>
                        </div>
                        @endif

                        <div class="col-12">
                            <input type="email" class="form-control" placeholder="hello@example.com"
                                name="email" required>
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                        <div class="col-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Remember
                                    me</label>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ route("password.request") }}">Forgot Password?</a>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>
                    </form>
                    <p class="mt-3 mb-0">Don't have an account? <a class="text-primary" href="{{ route('register') }}">Sign
                        Up</a></p>
            </div>

        </div>
        <div class="privacy-link">
            <a href="">Privacy Policy</a>
        </div>
    </div>
</div>
</div>
</div>
@endsection
