@extends('website.master')

@section('title')
    login
@endsection

@section('body')

    <!--section start-->
    <section class="login-page section-big-py-space b-g-light">
        <div class="custom-container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-8 offset-xl-4 offset-lg-3 offset-md-2">
                    <div class="theme-card">
                        <h3 class="text-center">Login</h3>
                        <form action="{{ route('customer.login') }}" method="post" class="theme-form">
                            @csrf
                            <div class="form-group">
                                <label>Email/Phone</label>
                                <input type="text" name="user_name" class="form-control" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your password" required="">
                            </div>
                            <button type="submit" class="btn btn-normal">Login</button>
                            <a class="float-end txt-default mt-2" href="forget-pwd.html">Forgot your password?</a>
                        </form>
                        <p class="mt-3">Sign up for a free account at our store. Registration is quick and easy. It allows you to be able to order from our shop. To start shopping click register.</p>
                        <a href="{{route('customer.registration')}}" class="txt-default pt-3 d-block">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->
@endsection
