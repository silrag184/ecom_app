@extends('admin.master')

@section('title')
    Product Details
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
                        <h1 class="page-title">Manage Product</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Product Details</h3>
                                <a href="{{ route('products.index') }}" class="btn btn-blue ms-auto d-block"><--Go Back</a>
                                <button class="ms-auto">
                                    <a href="{{route('products.edit',$product->id )}}" class="btn btn-success btn-sm ms-2">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    @if($product->status==1)
                                        <a href="{{route('products.status',$product->id )}}" class="btn btn-danger float-start btn-sm">
                                            <i class="fa fa-eye-slash"></i>
                                        </a>
                                    @else
                                        <a href="{{route('products.status',$product->id )}}" class="btn btn-success float-start btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    @endif

                                    <form action="{{ route('products.destroy',$product->id ) }}"  method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm ms-2" onclick="return confirm('Are you sure delete Product.'); ">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </button>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-danger">{{session('message') }}</p>
                                <table class="table table-bordered text-wrap w-100" id="responsive-table">
                                    <thead>
                                    <tr>
                                        <th class="bg-light">
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-4 form-label">Heading</label>
                                                        <label class="col-md-8 fs-4 form-label">
                                                            Information
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Product Id</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $product->id }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Product Name</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $product->name }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Product Code</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $product->code }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Product Image</label>
                                                        <label class="col-md-8 form-label">
                                                            <img src="{{ asset($product->image) }}" style="width: 100px; height:80px;">
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Other Images</label>
                                                        <label class="col-md-8 form-label">
                                                            @foreach($product->images as $image)
                                                                <img src="{{ asset($image->other_images) }}" alt="" style="width:80px; height:60px">
                                                            @endforeach
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Category Name</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $product->category->name }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Sub Category Name</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $product->subCategory->name }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Brand Name</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $product->brand->name }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Unit Name</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $product->unit->name }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Color Name</label>
                                                        <label class="col-md-8 form-label">
{{--                                                            @if(count($product->colors) > 0)--}}
                                                            @foreach ($product->colors as $color)
                                                                {{$color->color->name.' , '}}
                                                            @endforeach
{{--                                                            @endif--}}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Size Name</label>
                                                        <label class="col-md-8 form-label">
                                                            @foreach ($product->sizes as $size)
                                                                {{ $size->size->name.',' }}
                                                            @endforeach
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Short Description</label>
                                                        <label class="col-md-8 form-label">
                                                            {!! $product->short_description !!}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Long Description</label>
                                                        <label class="col-md-8 form-label">
                                                            {!! $product->long_description !!}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Meta Title</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $product->meta_title }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Meta Description</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $product->meta_description }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Product video link</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $product->video_link }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Regular Price</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $product->regular_price }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Discount Type</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $product->discount_type }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Discount Amount</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $product->discount_amount }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Selling Price</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $product->selling_price }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Stock Amount</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $product->stock_amount }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Status</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $product->status==1 ? 'Published' : 'UnPublished' }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->


            </div>
        </div>
    </div>


@endsection
