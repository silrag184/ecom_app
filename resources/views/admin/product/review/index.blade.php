@extends('admin.master')

@section('title')
    Manage Product Review
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
                        <h1 class="page-title">Product Review</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Product Review</li>
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
                                <span><h3 class="card-title">All Product Review</h3></span>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Sl</th>
                                            <th class="wd-15p border-bottom-0">Customer Info</th>
                                            <th class="wd-20p border-bottom-0">Product Info</th>
                                            <th class="wd-15p border-bottom-0">Review</th>
                                            <th class="wd-10p border-bottom-0">Status</th>
                                            <th class="wd-25p border-bottom-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($reviews as $review)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $review->customer->name }} <br> {{ $review->customer->phone }}</td>
                                                <td>{{ $review->product->name }}</td>
                                                <td>{{ $review->review }}</td>
                                                <td>{{ $review->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                                <td class="justify-content-center">
                                                    <a href="{{ route('update-review-status', $review->id) }}" class="btn {{ $review->status == 1 ? 'btn-warning' : 'btn-success' }} btn-sm me-2 float-start">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <form action="{{ route('delete-review', $review->id) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this!!')">
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
