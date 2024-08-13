@extends('website.master')
@section('title')
    register
@endsection

@section('body')

    <!--section start-->
    <section class="login-page section-big-py-space b-g-light">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="theme-card">
                        <h3 class="text-center">Create account</h3>
                        <form class="theme-form" action="{{ route('customer.registration') }}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-12 form-group">
                                    <label for="review">Name</label>
                                    <input type="text" class="form-control" name="name" id="lname" placeholder="Name" required="">
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-12 form-group">
                                    <label for="review">Mobile No</label>
                                    <input type="text" class="form-control" name="phone"  placeholder="Mobile No" required="">
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-12 form-group">
                                    <label>email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter your password" required="">
                                </div>
                                <div class="col-md-12 form-group"><button type="submit" class="btn btn-normal">create Account</button></div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-12 ">
                                    <p>Have you already account? <a href="" class="txt-default">click</a> here to &nbsp;<a href="" class="txt-default">Login</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->
@endsection
