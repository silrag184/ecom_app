@extends('website.master')

@section('title')
    Complete Order
@endsection

@section('body')
    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>checkout</h2>
                            <ul>
                                <li><a href="">home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="javascript:void(0)">Complete Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- section start -->
    <section class="section-big-py-space b-g-light">
        <div class="custom-container">
            <div class="checkout-page contact-page">
                <div class="row">
                    <div class="col">
                        <h4 class="text-center text-info">{{ session('message') }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
