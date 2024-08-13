@extends('website.master')
@section('title')
    Order
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
                                <li ><a href="{{ route('customer.dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ route('customer.profile') }}">Profile</a></li>
                                <li class="active"><a href="{{ route('customer.order') }}">Orders</a></li>
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
                                <h2>My Order</h2></div>

                            <div class="box-account box-info">
                                <div class="col-sm-12">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr class="table-head text-center">
                                            <th >SL</th>
                                            <th >Order No.</th>
                                            <th>Total Price</th>
                                            <th>Order Date</th>
                                            <th>Order Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-center">
                                        @foreach( $orders as $order)
                                            <tr class="text-center">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $order->id }}</td>
                                                <td><b>{{ $order->order_total }}</b></td>
                                                <td><b>{{ $order->order_date }}</b></td>
                                                <td><b>{{ $order->order_status }}</b></td>
                                                <td class="d-flex">
                                                    <a href="" class="btn btn-outline-success btn-md">
                                                        <i class="fa fa-book"></i>
                                                    </a>
                                                    <form action="" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="icon btn"><i class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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
