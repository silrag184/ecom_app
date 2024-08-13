@extends('admin.master')

@section('title')
    Manage Privacy Policy
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
                                <span><h3 class="card-title">Add Policy Form</h3></span>
                                <a href="{{ route('privacy-policy.create') }}" class="btn btn-primary ms-auto d-block">Add Privacy</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('privacy-policy.update', $privacy_policy->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="color_id" class="col-md-2 form-label">Shipping Policy</label>
                                                <div class="col-md-10">
                                                    <textarea class="summernote" name="shipping_policy" id="">{!! $privacy_policy->shipping_policy  !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="color_id" class="col-md-2 form-label">Return Policy</label>
                                                <div class="col-md-10">
                                                    <textarea class="summernote" name="return_policy" id="">{!! $privacy_policy->return_policy  !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="color_id" class="col-md-2 form-label">Terms & Condition</label>
                                                <div class="col-md-10">
                                                    <textarea class="content" name="terms_policy" id="">{!! $privacy_policy->terms_policy  !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="color_id" class="col-md-2 form-label">Fashion Policy</label>
                                                <div class="col-md-10">
                                                    <textarea class="summernote" name="fashion_policy" id="">{!! $privacy_policy->fashion_policy  !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="color_id" class="col-md-2 form-label">Electronics Policy</label>
                                                <div class="col-md-10">
                                                    <textarea class="summernote" name="electronics_policy" id="">{!! $privacy_policy->electronics_policy  !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="color_id" class="col-md-2 form-label">Cosmetics Policy</label>
                                                <div class="col-md-10">
                                                    <textarea class="summernote" name="cosmetic_policy" id="">{!! $privacy_policy->cosmetic_policy  !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="color_id" class="col-md-2 form-label">Food Policy</label>
                                                <div class="col-md-10">
                                                    <textarea class="summernote" name="food_policy" id="">{!! $privacy_policy->food_policy  !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="color_id" class="col-md-2 form-label">Stationary Policy</label>
                                                <div class="col-md-10">
                                                    <textarea class="summernote" name="stationary_policy" id="">{!! $privacy_policy->stationary_policy  !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="color_id" class="col-md-2 form-label">Drug & Medicine Policy</label>
                                                <div class="col-md-10">
                                                    <textarea class="summernote" name="drug_policy" id="">{!! $privacy_policy->drug_policy  !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="color_id" class="col-md-2 form-label">Construction Policy</label>
                                                <div class="col-md-10">
                                                    <textarea class="summernote" name="construction_policy" id="">{!! $privacy_policy->construction_policy  !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save Privacy Policies</button>
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
