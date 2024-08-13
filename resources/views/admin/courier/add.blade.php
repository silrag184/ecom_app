@extends('admin.master')

@section('title')
    Add-Courier
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
                        <h1 class="page-title">Form Layouts</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Courier info</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">Add Courier Form</h3></span>
                                <a href="{{ route('courier.index') }}" class="btn btn-primary ms-auto d-block">Manage Courier</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('courier.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
                                        <label for="courierName" class="col-md-3 form-label">Courier Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="courierName" name="name" placeholder="Enter Courier name" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="email" class="col-md-3 form-label">Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="email" name="email" placeholder="Enter Courier Email" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="mobile" class="col-md-3 form-label">Mobile No.</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="mobile" name="mobile" placeholder="Enter Courier Phone" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="cost" class="col-md-3 form-label">Courier Cost</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="cost" name="cost" placeholder="Enter Courier cost" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">Courier Logo</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="image" name="image" type="file">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit Courier Info</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->



            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->

@endsection
