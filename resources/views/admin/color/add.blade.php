@extends('admin.master')

@section('title')
    Add-Color
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
                                <span><h3 class="card-title">Add Color Form</h3></span>
                                <a href="{{ route('colors.index') }}" class="btn btn-primary ms-auto d-block">Manage Color</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('colors.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
                                        <label for="colorName" class="col-md-3 form-label">Color Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="colorName" name="name" placeholder="Enter color name" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="colorCode" class="col-md-3 form-label">Color Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="colorCode" name="code" placeholder="Enter color code" type="text">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Add Color</button>
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
