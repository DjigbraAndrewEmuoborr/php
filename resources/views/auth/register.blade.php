@extends('layouts.master')

@section('title', 'Account Registration')

@section('content')

    <!-- Page Content-->
    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-9 col-md-9">
                    <div class="mini-logo text-center my-4">
                        <a href="{{ route('homepage') }}"><img src="{{ asset('tendex/images/logo.png') }}"
                                alt="Logo"></a>
                        <h4 class="card-title mt-5">Sign Up to {{ config('app.name') }}</h4>
                    </div>
                    <div class="auth-form card">
                        <div class="card-body">
                            <form class="signin_validate row g-3" method="POST" action="{{ route('register') }}">
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
                                    <input type="text" class="form-control" placeholder="Full Name" name="name">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control" placeholder="hello@example.com" name="email">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                                <div class="col-sm-6">
                                    
                                        <input class="form-control" name="password_confirmation" type="password" required
                                            id="reg-password-confirm" placeholder="Confirm Password">
                                        <div class="invalid-feedback">Passwords do not match!</div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" required name="agree" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            I certify that I am 18 years of age or older, and agree to the <a href="#"
                                                class="text-primary">User Agreement</a> and <a href="#"
                                                class="text-primary">Privacy Policy</a>.
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Create account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="mt-3 mb-0">Already have an account? <a class="text-primary"
                                href="{{ route('login') }}">Sign
                                In</a></p>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var ref = getCookie("ref");
        $('#ref').val(ref);
    </script>
@endpush
