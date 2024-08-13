@extends('admin.master')

@section('title')
    Manage Company
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
                        <h1 class="page-title">Manage Company</h1>
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
                                <span><h3 class="card-title">Add Company Form</h3></span>
                                <a href="{{ route('company.index') }}" class="btn btn-primary ms-auto d-block">Manage Company</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
                                        <label for="categoryName" class="col-md-3 form-label">Company Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="categoryName" name="name" placeholder="Enter Company name" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="sloGan" class="col-md-3 form-label">Company Slogan</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="sloGan" name="slogan" placeholder="Enter Slogan" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="domainUrl" class="col-md-3 form-label">Company Domain URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="domainUrl" name="domain_url" placeholder="Enter Domain URL" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="facebookUrl" class="col-md-3 form-label">Company Facebook URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="facebookUrl" name="facebook_url" placeholder="Enter Facebook URL" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="twitterUrl" class="col-md-3 form-label">Company Twitter URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="twitterUrl" name="twitter_url" placeholder="Enter Twitter URL" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="youtubeUrl" class="col-md-3 form-label">Company YouTube URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="youtubeUrl" name="youtube_url" placeholder="Enter YouTube URL" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="linkedInUrl" class="col-md-3 form-label">Company LinkedIn URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="linkedInUrl" name="linked_in_url" placeholder="Enter LinkedIn URL" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="instaGramUrl" class="col-md-3 form-label">Company Instagram URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="instaGramUrl" name="instagram_url" placeholder="Enter Instagram URL" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="logoJpg" class="col-md-3 form-label">Company Logo JPG</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="logoJpg" name="logo_jpg" type="file">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="logoPng" class="col-md-3 form-label">Company Logo PNG</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="logoPng" name="logo_png" type="file">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="favIcon" class="col-md-3 form-label">Company FavIcon</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="favIcon" name="favicon" type="file">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="tradeLicense" class="col-md-3 form-label">Company Trade License</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="tradeLicense" name="trade_license" type="file">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="description" class="col-md-3 form-label">Company TIN Certificate</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="categoryName" name="tin_certificate" type="file">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="ecabCertificate" class="col-md-3 form-label">Company ECAB Certificate</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="ecabCertificate" name="ecab_certificate" type="file">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="paymentImage" class="col-md-3 form-label">Payment Gateway Image</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="paymentImage" name="payment_image" type="file">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="contactEmail" class="col-md-3 form-label">Company Contact Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="contactEmail" name="contact_email" placeholder="Enter Contact Email" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="supportEmail" class="col-md-3 form-label">Company Support Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="supportEmail" name="support_email" placeholder="Enter Support Email" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="description" class="col-md-3 form-label">Company Contact Phone</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="categoryName" name="contact_mobile" placeholder="Enter Contact Mobile" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="description" class="col-md-3 form-label">Company Support Phone</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="categoryName" name="support_mobile" placeholder="Enter Support Mobile" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="faxNumber" class="col-md-3 form-label">Company Fax Number</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="faxNumber" name="fax_number" placeholder="Enter Fax Number" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="addRess" class="col-md-3 form-label">Company Address</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="addRess" name="address" placeholder="Enter Address" type="text"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="bioGraphy" class="col-md-3 form-label">Company Short Biography</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="bioGraphy" name="biography" placeholder="Enter Biography" type="text"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Add Company Info</button>
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
