@extends('admin.master')

@section('title')
    Add Shipping Info Form
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
                            <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">Add Shipping Info Form</h3></span>
                                <a href="{{ route('shippingAreas.index') }}" class="btn btn-primary ms-auto d-block">Manage Shipping Info</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('shippingAreas.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="unitName" class="col-md-4 form-label">Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="shippingAreaName" class="form-control" name="name" placeholder="Shipping Area Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="description" class="col-md-2 form-label">Description</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="unitName" class="col-md-4 form-label">Shipping Charge</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="shippingAreaCharge" class="form-control" name="price" placeholder="Shipping Charge">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save Shipping Info</button>
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
