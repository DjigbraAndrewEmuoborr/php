@extends('layouts.master')

@section("title","Forgot Password?")

@section("content")
    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-4 col-md-5">
                    <div class="mini-logo text-center my-3">
                        <a href="{{ route("homepage") }}"><img src="{{ asset("tendex/images/logo.png") }}" alt="Logo"></a>
                        <h4 class="card-title mt-5">Reset Password</h4>
                    </div>
                    <div class="auth-form card">
                        <div class="card-body">
                            <form action="{{ route('password.email') }}" class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Email</label>

                                    <input type="email" class="form-control" placeholder="" required>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </form>
                            <div class="new-account mt-3">
                                <p>Don't get code? <a class="text-primary" href="{{ route("password.email") }}">Resend</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

