@extends('website.master')
@section('title')
    Profile
@endsection

@section('body')

    <!-- section start -->
    <section class="section-big-py-space b-g-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="account-sidebar"><a class="popup-btn">my account</a></div>
                    <div class="dashboard-left">
                        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                        <div class="block-content ">
                            <ul>
                                <li><a href="{{ route('customer.dashboard') }}">Dashboard</a></li>
                                <li class="active"><a href="{{ route('customer.profile') }}">Profile</a></li>
                                <li><a href="{{ route('customer.order') }}">Orders</a></li>
                                <li><a href="{{ route('customer.wishlist.show') }}">Wishlist</a></li>
                                <li><a href="{{ route('customer.change-password') }}">Change Password</a></li>
                                <li class="last"><a href="{{ route('customer.logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="dashboard-right">
                        <div class="dashboard">
                            <div class="page-title">
                                <h2>Profile</h2></div>
                        </div>
                        <div class="box-account box-info">
                            <form action="{{ route('customer.update-profile',['id' =>$customer->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card card-body">
                                    <div class="row mb-3">
                                        <label class="col-md-3">Full Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="name" value="{{ $customer->name }}"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Mobile Number</label>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" name="phone" value="{{ $customer->phone }}"/>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-3">Email Address</label>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control" name="email" value="{{ $customer->email }}"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Address</label>
                                        <div class="col-md-9">
                                            <textarea type="text" class="form-control" name="address">{{ $customer->address }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Birth Date</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" name="date_of_birth" value="{{ ($customer->date_of_birth) }}"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Gender</label>
                                        <div class="col-md-9">
                                            <label> <input type="radio"  name="gender" class="fixed" value="Male"{{ $customer->gender == 'Male' ? 'checked' : ''}}/> Male </label>
                                            <label> <input type="radio"  name="gender" class="percent" value="Female"{{ $customer->gender == 'Female' ? 'checked' : ''}}/> Female </label>
                                            <label> <input type="radio"  name="gender" class="percent" value="Other"{{ $customer->gender == 'Other' ? 'checked' : ''}}/> Others </label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Image</label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control" name="image"/>
                                            <img src="{{ asset( $customer->image ) }}" style=" width: 80px; height: 60px">
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-9 ms-auto">
                                            <input type="submit" class="btn btn-success" value="update profile information">
                                        </div>
                                    </div>
                                </div>
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
