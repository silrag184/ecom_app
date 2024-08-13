@extends('admin.master')

@section('title')
    Product Offer
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
                                <span><h3 class="card-title">Add Product Offer Form</h3></span>
                                <a href="{{ route('offer.index') }}" class="btn btn-primary ms-auto d-block">Manage Product Offer</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('offer.update', $offer->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mb-4">
                                        <label for="color_id" class="col-md-4 form-label">Offer Name</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="name" value="{{ $offer->name }}" placeholder="Offer Name">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label class="col-md-3 form-label">Offer Type</label>
                                        <div class="col-md-9 form-group">
                                            <label class="me-4"><input type="radio" value="1" name="offer_type" {{ $offer->offer_type == '1' ? 'checked' : ' ' }}/>Mega Offer</label>
                                            <label class="me-4"><input type="radio" value="2" name="offer_type" {{ $offer->offer_type == '2' ? 'checked' : ' ' }}/>Combo Offer</label>
                                            <label class="me-4"><input type="radio" value="3" name="offer_type" {{ $offer->offer_type == '3' ? 'checked' : ' ' }}/>Today Offer</label>
                                            <label class="me-4"><input type="radio" value="4" name="offer_type" {{ $offer->offer_type == '4' ? 'checked' : ' ' }}/>Hot Offer</label>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="description" class="col-md-2 form-label">Offer Description</label>
                                                <div class="col-md-10">
                                                    <textarea class="content" name="description" id="">{{ $offer->description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="row">
                                            <label for="" class="col-md-4 form-label">Percentage</label>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" name="percentage" value="{{ $offer->percentage }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-md-4 form-label">Offer Start Date</label>
                                                <div class="col-md-8">
                                                    <input type="datetime-local" class="form-control" name="start_date" value="{{ $offer->start_datetime }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-md-4 form-label">Offer End Date</label>
                                                <div class="col-md-8">
                                                    <input type="datetime-local" class="form-control" name="end_date" value="{{ $offer->end_datetime }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="" class="col-md-4 form-label">Banner Image</label>
                                        <div class="col-md-5">
                                            <input type="file" class="dropify" data-height="200" name="image">
                                            <img src="{{ asset($offer->image) }}" alt="" height="180px" width="300px">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="" class="col-md-4 form-label">Product Name</label><hr>
                                        <div class="col-md-8 form-group">
                                            <select multiple name="product[]" data-placeholder="Select Product" class="form-control select2 " id="">
                                                <option>Select Product</option>
                                                @foreach($products as $product)
                                                    <option value="{{ $product->id }}" @foreach($offer->offerDetails as $offerDetail) @selected($offerDetail->product_id == $product->id)  @endforeach>{{ $product->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Update Product Offer</button>
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
