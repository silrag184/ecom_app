@extends('admin.master')

@section('title')
    Product
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
                        <h1 class="page-title">Product</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Product</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <!-- End Row -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">All Products</h3></span>
                                <a href="{{ route('products.create') }}" class="btn btn-primary ms-auto d-block">Add Product</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Sl</th>
                                            <th class="wd-15p border-bottom-0">Product Name</th>
                                            <th class="wd-15p border-bottom-0">Product Code</th>
                                            <th class="wd-15p border-bottom-0">Category Name</th>
                                            <th class="wd-15p border-bottom-0">Sub Category Name</th>
                                            <th class="wd-15p border-bottom-0">Brand Name</th>
                                            <th class="wd-15p border-bottom-0">Unit Name</th>
                                            <th class="wd-15p border-bottom-0">Size Name</th>
                                            <th class="wd-15p border-bottom-0">Color Name</th>
                                            <th class="wd-15p border-bottom-0">Regular Price</th>
                                            <th class="wd-15p border-bottom-0">Selling Price</th>
                                            <th class="wd-15p border-bottom-0">Stock Amount</th>
                                            <th class="wd-20p border-bottom-0">Image</th>
                                            <th class="wd-10p border-bottom-0">Status</th>
                                            <th class="wd-25p border-bottom-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->code }}</td>
                                                <td>{{ $product->category->name }}</td>
                                                <td>{{ $product->subCategory->name }}</td>
                                                <td>{{ $product->brand->name }}</td>
                                                <td>{{ $product->unit->name }}</td>
                                                <td>
                                                    @foreach ($product->sizes as $size)
                                                        {{ $size->size->name.',' }}
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($product->colors as $color)
                                                        {{ $color->color->name.',' }}
                                                    @endforeach
                                                </td>
                                                <td>{{ $product->regular_price }}</td>
                                                <td>{{ $product->selling_price }}</td>
                                                <td>{{ $product->stock_amount }}</td>
                                                <td>
                                                    <img src="{{ asset($product->image) }}" alt="" height="60" width="80">
                                                </td>
                                                <td>{{ $product->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                                <td class="justify-content-center">
                                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm me-2 float-start">
                                                        <i class="fa fa-book"></i>
                                                    </a>
                                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm me-2 float-start">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    @if($product->status == 1)
                                                        <a href="{{ route('products.status', $product->id) }}" class="btn btn-warning btn-sm me-2 float-start">
                                                            <i class="fa fa-eye-slash"></i>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('products.status', $product->id) }}" class="btn btn-success btn-sm me-2 float-start">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    @endif


                                                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this!!')">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->



            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection
