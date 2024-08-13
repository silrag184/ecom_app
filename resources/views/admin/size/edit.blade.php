@extends('admin.master')

@section('title')
    Edit-Size
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
                        <h1 class="page-title">Size</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Size</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Size</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-lg-8 offset-lg-2 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Edit Size Form</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('sizes.update', $size->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mb-4">
                                        <label for="sizeName" class="col-md-3 form-label">Size Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="sizeName" name="name" value="{{ $size->name }}" placeholder="Enter size name" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="description" class="col-md-3 form-label">Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="description" cols="30" rows="10" name="description" placeholder="Enter Description">{{ $size->description }}</textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Update Size Info</button>
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
