@extends('website.master')
@section('title')
    Change password
@endsection

@section('body')

    <!-- section start -->
    <section class="section-big-py-space b-g-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="account-sidebar"><a class="popup-btn">my account</a></div>
                    <div class="dashboard-left">
                        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-right" aria-hidden="true"></i> back</span></div>
                        <div class="block-content ">
                            <ul>
                                <li><a href="{{ route('customer.dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ route('customer.profile') }}">Profile</a></li>
                                <li><a href="{{ route('customer.order') }}">Orders</a></li>
                                <li><a href="{{ route('customer.wishlist.show') }}">Wishlist</a></li>
                                <li class="active"><a href="{{ route('customer.change-password') }}">Change Password</a></li>
                                <li class="last"><a href="{{ route('customer.logout') }}">Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="dashboard-right">
                        <div class="dashboard">
                            <div class="page-title">
                                <h2>My Profile</h2>
                            </div>
                            <div class="theme-card">
                                <h3 class="text-center">Change Password</h3>
                                <form class="theme-form" method="POST" action="{{ route('customer.update-password',['id' =>$customer->id]) }}">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-12 form-group">
                                            <label for="current_password">Current Password:</label>
                                            <input class="form-control" type="password" name="current_password" required>
                                            <input type="hidden" name="customer_id" value="{{ $customer->password }}"> <!-- Pass user ID -->
                                            <label for="current_password">Current Password:</label>
                                            <input type="password" name="current_password" required>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-12 form-group">
                                            <label for="new_password">New Password:</label>
                                            <input class="form-control" type="password" name="new_password" required>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-12 form-group">
                                            <label for="new_password_confirmation">Confirm New Password:</label>
                                            <input class="form-control" type="password" name="new_password_confirmation" required>
                                        </div>
                                    </div>

                                    <button class="btn-block btn btn-primary" type="submit">Change Password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
