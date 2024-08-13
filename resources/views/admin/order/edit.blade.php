@extends('admin.master')

@section('title')
    Order Edit
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
                            <li class="breadcrumb-item active" aria-current="page">Order Edit</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <!-- End Row -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">Edit Order Info</h3></span>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin-order.update', ['id' => $order->id]) }}" method="POST">
                                    @csrf
                                    <div class="row  mb-3">
                                        <label for="" class="col-md-3">Order Total</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="{{ $order->order_total }} BDT">
                                        </div>
                                    </div>
                                    <div class="row  mb-3">
                                        <label for="" class="col-md-3">Customer Info</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" readonly value="{!! $order->customer->name.' '.'('.$order->customer->phone.')' !!}">
                                        </div>
                                    </div>
                                    <div class="row  mb-3">
                                        <label for="" class="col-md-3">Delivery Address</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="delivery_address">{{ $order->delivery_address }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row  mb-3">
                                        <label for="" class="col-md-3">Select Courier</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="courier_id">
                                                <option value="0" disabled selected> -- Select Courier</option>
                                                @foreach($couriers as $courier)
                                                    <option value="{{ $courier->id }}" @selected($courier->id == $order->courier_id)>{{ $courier->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row  mb-3">
                                        <label for="" class="col-md-3">Select Order Status</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="order_status" required>
                                                <option value="" disabled selected> -- Select Order Status -- </option>
                                                <option value="Pending" @selected($order->order_status == 'Pending')>Pending</option>
                                                <option value="Processing" @selected($order->order_status == 'Processing')>Processing</option>
                                                <option value="Complete" @selected($order->order_status == 'Complete')>Complete</option>
                                                <option value="Cancel" @selected($order->order_status == 'Cancel')>Cancel</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row  mb-3">
                                        <div class="col-md-9">
                                            <input type="submit" class="btn btn-success" value="Update Order Info">
                                        </div>
                                    </div>
                                </form>
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
