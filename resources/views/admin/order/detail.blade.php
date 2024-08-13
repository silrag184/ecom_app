@extends('admin.master')

@section('title')
    Order Detail
@endsection

@section('body')

    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Order</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order Detail</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <!-- End Row -->

                <div class="row">
                    <div class="col">
                        <div class="card card-body">
                            <span><h3 class="card-title">Order Basic Info</h3></span>
                            <span class="float-right"><a href="{{ route('admin-order.manage') }}" class="btn btn-success">Back</a></span>
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Order ID</th>
                                    <td>{{ $order->id }}</td>
                                </tr>
                                <tr>
                                    <th>Order Total</th>
                                    <td>{{ $order->order_total }} BDT</td>
                                </tr>
                                <tr>
                                    <th>Tax Total</th>
                                    <td>{{ $order->tax_total }}</td>
                                </tr>
                                <tr>
                                    <th>Shipping Total</th>
                                    <td>{{ $order->shipping_total }}</td>
                                </tr>
                                <tr>
                                    <th>Order Date</th>
                                    <td>{{ $order->order_date }}</td>
                                </tr>
                                <tr>
                                    <th>Order Status</th>
                                    <td>{{ $order->order_status }}</td>
                                </tr>
                                <tr>
                                    <th>Delivery Address</th>
                                    <td>{{ $order->delivery_address }}</td>
                                </tr>
                                <tr>
                                    <th>Delivery Status</th>
                                    <td>{{ $order->delivery_status }}</td>
                                </tr>
                                <tr>
                                    <th>Delivery Date</th>
                                    <td>{{ $order->delivery_date }}</td>
                                </tr>
                                <tr>
                                    <th>Payment Method</th>
                                    <td>{{ $order->payment_method }}</td>
                                </tr>
                                <tr>
                                    <th>Payment Amount</th>
                                    <td>{{ $order->payment_amount }}</td>
                                </tr>
                                <tr>
                                    <th>Payment Status</th>
                                    <td>{{ $order->payment_status }}</td>
                                </tr>
                                <tr>
                                    <th>Payment Date</th>
                                    <td>{{ $order->payment_date }}</td>
                                </tr>
                                <tr>
                                    <th>Transaction ID</th>
                                    <td>{{ $order->transaction_id }}</td>
                                </tr>
                                <tr>
                                    <th>Currency</th>
                                    <td>{{ $order->currency }}</td>
                                </tr>
                                <tr>
                                    <th>Customer Info</th>
                                    <td>{!! $order->customer->name.' '.'('.$order->customer->phone.')' !!}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">Order Product Info</h3></span>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom w-100">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0 text-center">Sl</th>
                                            <th class="wd-15p border-bottom-0 text-center">Product Name</th>
                                            <th class="wd-20p border-bottom-0 text-center">Product Code</th>
                                            <th class="wd-15p border-bottom-0 text-center">Product Color</th>
                                            <th class="wd-10p border-bottom-0 text-center">Product Size</th>
                                            <th class="wd-10p border-bottom-0 text-center">Price</th>
                                            <th class="wd-25p border-bottom-0 text-center">Quantity</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-center text-bold">
                                            @foreach($order->orderDetails as $orderDetail)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $orderDetail->product_name }}</td>
                                                    <td>{{ $orderDetail->product_code }}</td>
                                                    <td>{{ $orderDetail->product_color }}</td>
                                                    <td>{{ $orderDetail->product_size }}</td>
                                                    <td>{{ $orderDetail->product_price }}</td>
                                                    <td>{{ $orderDetail->product_qty }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->



            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection
