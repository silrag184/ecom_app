@extends('admin.master')

@section('title')
    Edit-Category
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
                        <h1 class="page-title">Category</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-lg-8 offset-lg-2 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Edit Category Form</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Category Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="categoryName" name="name" value="{{ $category->name }}" placeholder="Enter category name" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="description" class="col-md-3 form-label">Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="description" cols="30" rows="10" name="description" placeholder="Enter Description">{{ $category->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">Image</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="image" name="image" type="file">
                                            <img src="{{ asset($category->image) }}" alt="" height="100" width="120">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Update Category Info</button>
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
