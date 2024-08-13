@extends('admin.master')

@section('title')
    Add Unit Form
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
                                <span><h3 class="card-title">Add Unit Form</h3></span>
                                <a href="{{ route('units.index') }}" class="btn btn-primary ms-auto d-block">Manage Unit</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('units.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="unitName" class="col-md-4 form-label">Unit Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="unitName" class="form-control" name="name" placeholder="Unit Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="unitCode" class="col-md-3 form-label">Unit Code</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="unitCode" class="form-control" name="code" placeholder="Unit Code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="description" class="col-md-2 form-label">Description</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save Unit</button>
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
