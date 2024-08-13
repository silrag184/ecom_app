@extends('admin.master')

@section('title')
    Add-Supplier/Vendor
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span>
                                    <h3 class="card-title">Add Supplier/Vendor Form</h3>
                                </span>
                                <a href="{{ route('supplier.index') }}" class="btn btn-primary ms-auto d-block">Manage
                                    Supplier/Vendor</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{ session('message') }}</p>

                                <form class="form-horizontal row g-3" action="{{ route('supplier.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="wrapper col-md-8">
                                        <input type="radio" name="supplier_type" value='0' id="option-1">
                                        <input type="radio" name="supplier_type" value='1' id="option-2">
                                        <input type="radio" name="supplier_type" value='2' id="option-3">

                                        <label for="option-1" class="option option-1">
                                            <div class="dot"></div>
                                            <span>Supplier</span>
                                        </label>
                                        <label for="option-2" class="option option-2">
                                            <div class="dot"></div>
                                            <span>Vendor</span>
                                        </label>
                                        <label for="option-3" class="option option-3">
                                            <div class="dot"></div>
                                            <span>Both</span>
                                        </label>
                                    </div>

                                    <div class="row col-md-4 mb-4 ">
                                        <div class="col-sm-12">
                                            <input type="file" class="dropify" data-height="200" id="person-image"
                                                name="person_image" />
                                            <label for="person-image" class="form-label text-center">Supplier/Vendor Image</label>
                                        </div>
                                    </div>

                                    <div class="row mb-4 col-md-6">
                                        <label for="Supplier/Vendorname" class="form-label">Supplier/Vendor Name</label>
                                        <div>
                                            <input class="form-control" id="Supplier/VendorName" name="name"
                                                placeholder="Enter Supplier/Vendor name" type="text">
                                        </div>
                                    </div>

                                    <div class="row mb-4 col-md-6">
                                        <label for="phone" class="form-label">Phone</label>
                                        <div>
                                            <input class="form-control" id="phone" name="phone" cols="30"
                                                rows="10" placeholder="Phone" type='text'>
                                        </div>
                                    </div>

                                    <div class="row mb-4 col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <div>
                                            <input class="form-control" id="email" name="email" cols="30"
                                                rows="10" placeholder="Email" type='email'>
                                        </div>
                                    </div>

                                    <div class="row mb-4 col-md-6">
                                        <label for="company-name" class="form-label">Company Name</label>
                                        <div>
                                            <input class="form-control" id="company-name" name="company_name" cols="30"
                                                rows="10" placeholder="Company Name" type='text'>
                                        </div>
                                    </div>

                                    <div class="row mb-4 col-md-6">
                                        <label for="address" class="form-label">Address</label>
                                        <div >
                                            <input class="form-control" id="address" name="address" cols="30"
                                                rows="10" placeholder="Address" type='text'>
                                        </div>
                                    </div>

                                    <div class="row mb-4 col-md-6">
                                        <label for="bank-account" class="form-label">Bank Account No</label>
                                        <div >
                                            <input class="form-control" id="bank-account" name="bank_account"
                                                cols="30" rows="10" placeholder="Bank Account No"
                                                type='number'>
                                        </div>
                                    </div>


                                    <div class="row mb-4 col-md-12">
                                        <label for="trade-lic" class="form-label">Trade License No</label>
                                        <div >
                                            <input class="form-control" id="trade-lic" name="trade_lic" cols="30"
                                                rows="10" placeholder="Trade License No" type='text'>
                                        </div>
                                    </div>

                                    <div class="row mb-4 col-md-12">
                                        <label for="trade-lic-image" class="col-md-2 form-label">Trade License
                                            Image</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="file" class="dropify" data-height="200" id="trade-lic-image"
                                                name="trad_lic_image" />
                                        </div>
                                    </div>

                                    <div class="row mb-4 col-md-12">
                                        <label for="nid" class="form-label">NID No</label>
                                        <div>
                                            <input class="form-control" id="nid" name="nid" cols="30"
                                                rows="60" placeholder="NID No" type='number'>
                                        </div>
                                    </div>

                                    <div class="row mb-4 col-md-12">
                                        <label for="nid-image" class=" col-md-2 form-label">NID Image</label>
                                        <div  class="col-md-7">
                                            <input type="file" class="dropify" data-height="200" id="nid-image"
                                                name="nid_image" />
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Create New Supplier/Vendor</button>
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
