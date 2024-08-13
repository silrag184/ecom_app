@extends('website.master')
@section('title')
    wishlist
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
                                <li class="active"><a href="{{ route('customer.wishlist.show') }}">Wishlist</a></li>
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
                                <h2>My Wishlist</h2></div>
                            <div class="box-account box-info">
                                <div class="col-sm-12">
                                    <table class="table  table-bordered">
                                        <thead class="text-center">
                                        <tr>
                                            <th>SL</th>
                                            <th> </th>
                                            <th>Product Details</th>
                                            <th>Price</th>
                                            <th>Remove</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-center">
                                        @foreach( $wishlists as $wishlist)
                                            @if(Session::get('customer_id')==$wishlist->customer_id)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <img src="{{ asset($wishlist->product->image) }}" style=" height:50px; width:50px;">
                                                    </td>
                                                    <td class="text-start">
                                                        <a href="{{ route('product.details',$wishlist->product_id) }}" class="text-dark">
                                                            <b>{{ $wishlist->product->name }}</b><br>
                                                            <b>Code: {{ $wishlist->product->code }}</b>
                                                        </a>
                                                    </td>
                                                    <td><b>{{ $wishlist->product->selling_price }}</b></td>
                                                    <td class="d-flex">
                                                        <form action="{{ route('customer.wishlist.delete', $wishlist->id) }}" method="get">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-block" onclick="return confirm('Are you sure delete this!!')">
                                                                <i class="fa fa-trash mb-0"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endif
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
