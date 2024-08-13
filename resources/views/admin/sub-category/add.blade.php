@extends('admin.master')

@section('title')
    Add-Subcategory
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
                                <span><h3 class="card-title">Add Sub-Category Form</h3></span>
                                <a href="{{ route('subcategories.index') }}" class="btn btn-primary ms-auto d-block">Manage Sub-Category</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('subcategories.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
                                        <label for="subcategoryName" class="col-md-3 form-label">Select Category</label>
                                        <div class="col-md-9">
                                            <select name="category_id" class="form-control" id="subcategoryName">
                                                <option value="">Select A Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="subcategoryName" class="col-md-3 form-label">Subcategory Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="subcategoryName" name="name" placeholder="Enter subcategory name" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="description" class="col-md-3 form-label">Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="description" name="description" cols="30" rows="10" placeholder="Enter Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">Image</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="image" name="image" type="file">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Create New Subcategory</button>
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
