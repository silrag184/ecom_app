@extends('admin.master')

@section('title')
    Add-Category
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
                                <span><h3 class="card-title">Add Category Form</h3></span>
                                <a href="{{ route('categories.index') }}" class="btn btn-primary ms-auto d-block">Manage Category</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Category Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="categoryName" name="name" placeholder="Enter category name" type="text">
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
                                    <button class="btn btn-primary" type="submit">Create New Category</button>
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
