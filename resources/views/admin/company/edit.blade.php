@extends('admin.master')
@section('title')
    Update Company
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
                        <h1 class="page-title"> Update Company</h1>
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
                                <span><h3 class="card-title">Update Company Information</h3></span>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>

                                <form class="form-horizontal" action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Company Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" name="name" value="{{$company->name}}" type="text"/>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Slogam or Moto</label>
                                        <div class="col-md-9">
                                            <input class="form-control" name="slogan" value="{{$company->slogan}}" type="text"/>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Domain Url</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="domain_url" value="{{$company->domain_url}}" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Facebook Url</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="facebook_url" value="{{$company->facebook_url}}" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Twitter url</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="twitter_url" value="{{$company->twitter_url}}" type="text">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Youtube url</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="youtube_url" value="{{$company->youtube_url}}" type="text">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Linkedin url</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="linked_in_url" value="{{$company->linked_in_url}}" type="text">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Instagram url</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="instagram_url" value="{{$company->instagram_url}}" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Contact Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="contact_email" value="{{$company->contact_email}}" type="email">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Support Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="support_email" value="{{$company->support_email}}" type="email">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Contact Mobile</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="contact_mobile" value="{{$company->contact_mobile}}" type="number">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Support Mobile</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="support_mobile" value="{{$company->support_mobile}}" type="number">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Fax Number</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="fax_number" value="{{$company->fax_number}}" type="number">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Address</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="address">{{$company->address}}</textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Biography</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control"  name="biography">{{$company->biography}}</textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">Logo jpg</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="image" name="logo_jpg" type="file"/>
                                            <img src="{{asset($company->logo_jpg)}}" alt="" height="200"/>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">Logo png</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="image" name="logo_png" type="file"/>
                                            <img src="{{asset($company->logo_png)}}" alt="" height="200"/>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">Favicon</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="image" name="favicon" type="file"/>
                                            <img src="{{asset($company->favicon)}}" alt="" height="200"/>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">Trade License</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="image" name="trade_license" type="file"/>
                                            <img src="{{asset($company->trade_license)}}" alt="" height="200"/>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">TIN Certificate</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="image" name="tin_certificate" type="file"/>
                                            <img src="{{asset($company->tin_certificate)}}" alt="" height="200"/>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">ECAB Certificate</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="image" name="ecab_certificate" type="file"/>
                                            <img src="{{asset($company->ecab_certificate)}}" alt="" height="200"/>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">Payment Image</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="image" name="payment_image" type="file"/>
                                            <img src="{{asset($company->payment_image)}}" alt="" height="200"/>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Update Company Information</button>
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
