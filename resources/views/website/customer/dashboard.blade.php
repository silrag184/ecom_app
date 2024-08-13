@extends('website.master')
@section('title')
    dashboard
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
                                <li class="active"><a href="{{ route('customer.dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ route('customer.profile') }}">Profile</a></li>
                                <li><a href="{{ route('customer.order') }}">Orders</a></li>
                                <li><a href="{{ route('customer.wishlist.show') }}">Wishlist</a></li>
                                <li><a href="{{ route('customer.change-password') }}">Change Password</a></li>
                                <li class="last"><a href="{{ route('customer.logout') }}">Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="dashboard-right">
                        <div class="dashboard">
                            <div class="page-title">
                                <h2>My Dashboard</h2></div>
                            <div class="welcome-msg">
                                <p>Hello, MARK JECNO !</p>
                                <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                            </div>
                            <div class="box-account box-info">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title">
                                                <h3>Contact Information</h3><a href="javascript:void(0)">Edit</a></div>
                                            <div class="box-content">
                                                <h6>MARK JECNO</h6>
                                                <h6>MARk-JECNO@gmail.com</h6>
                                                <h6><a href="javascript:void(0)">Change Password</a></h6></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title">
                                                <h3>Newsletters</h3><a href="javascript:void(0)">Edit</a></div>
                                            <div class="box-content">
                                                <p>You are currently not subscribed to any newsletter.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Address Book</h3><a href="javascript:void(0)">Manage Addresses</a></div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h6>Default Billing Address</h6><address>You have not set a default billing address.<br><a href="javascript:void(0)">Edit Address</a></address></div>
                                            <div class="col-sm-6">
                                                <h6>Default Shipping Address</h6><address>You have not set a default shipping address.<br><a href="javascript:void(0)">Edit Address</a></address></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
