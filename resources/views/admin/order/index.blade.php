@extends('admin.master')

@section('title')
    Manage Order
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
                            <li class="breadcrumb-item active" aria-current="page">Manage Order</li>
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
                                <span><h3 class="card-title">All Order Info</h3></span>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0 text-center">Sl</th>
                                            <th class="wd-15p border-bottom-0 text-center">Order No.</th>
                                            <th class="wd-20p border-bottom-0 text-center">Order Date</th>
                                            <th class="wd-15p border-bottom-0 text-center">Order Total</th>
                                            <th class="wd-10p border-bottom-0 text-center">Order Status</th>
                                            <th class="wd-10p border-bottom-0 text-center">Customer Info.</th>
                                            <th class="wd-25p border-bottom-0 text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-center text-bold">
                                        @foreach($orders as $order)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->order_date }}</td>
                                                <td>{{ $order->order_total }} BDT</td>
                                                <td>{{ $order->order_status }}</td>
                                                <td>{!! $order->customer->name.'<br/>'.$order->customer->phone !!}</td>
                                                <td class="justify-content-center">
                                                    <a title="View Order Detail" href="{{ route('admin-order.detail', ['id' => $order->id]) }}" class="btn btn-success btn-sm me-2 float-start">
                                                        <i class="fa fa-book"></i>
                                                    </a>

                                                    <a title="order Edit" href="{{ route('admin-order.edit', ['id' => $order->id]) }}" class="btn btn-primary btn-sm me-2 float-start {{ $order->order_status == 'Complete' ? 'disabled' : '' }}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a title="order invoice" href="{{ route('admin-order.invoice', ['id' => $order->id]) }}" class="btn btn-info btn-sm me-2 float-start">
                                                        <i class="fa fa-file"></i>
                                                    </a>
                                                    <a title="download invoice" href="{{ route('admin-order.download-invoice', ['id' => $order->id]) }}" class="btn btn-secondary btn-sm me-2 float-start ">
                                                        <i class="fa fa-print"></i>
                                                    </a>

                                                    <form action="{{ route('admin-order.delete', ['id' => $order->id]) }}" method="post">
                                                        @csrf
                                                        <button type="submit" title="delete order" class="btn btn-danger btn-sm {{ $order->order_status == 'Cancel' ? '' : 'disabled' }}" onclick="return confirm('Are you sure delete this!!')">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
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
                <!-- End Row -->



            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection
