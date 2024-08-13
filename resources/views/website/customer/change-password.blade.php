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
                                <h2>My Profile</h2></div>
                            <div class="box-account box-info">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
