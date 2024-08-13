@extends('admin.master')

@section('title')
    Edit-Color
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
                        <h1 class="page-title">Color</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Color</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Color</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-lg-8 offset-lg-2 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Edit Color Form</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('colors.update', $color->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mb-4">
                                        <label for="colorName" class="col-md-3 form-label">Color Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="colorName" name="name" value="{{ $color->name }}" placeholder="Enter color name" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="colorCode" class="col-md-3 form-label">Color Code</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="colorCode" name="code" value="{{ $color->code }}" placeholder="Enter color code" type="text">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Update Color Info</button>
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
