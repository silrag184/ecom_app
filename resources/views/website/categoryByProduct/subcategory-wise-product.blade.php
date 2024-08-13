@extends('website.master')

@section('title')
    Subcategory-wise-product
@endsection


@section('body')
    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>Subcategory</h2>
                            @foreach($products->take(1) as $product)
                            <ul>
                                <li><a href="{{ route('home') }}">home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="javascript:void(0)">{{ $product->category->name }}</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="javascript:void(0)">{{ $product->subCategory->name }}</a></li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section class="section-big-pt-space ratio_asos b-g-light">
        <div class="collection-wrapper">
            <div class="custom-container">
                <div class="row">
                    <div class="col-sm-3 collection-filter category-page-side">
                        <!-- side-bar colleps block stat -->
                        <div class="collection-filter-block creative-card creative-inner category-side">
                            <!-- brand filter start -->
                            <div class="collection-mobile-back">
                                <span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                            <div class="collection-collapse-block open">
                                <h3 class="collapse-block-title mt-0">brand</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="collection-brand-filter">
                                        <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                            <input type="checkbox" class="custom-control-input form-check-input" id="zara">
                                            <label class="custom-control-label form-check-label" for="zara">zara</label>
                                        </div>
                                        <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                            <input type="checkbox" class="custom-control-input form-check-input" id="vera-moda">
                                            <label class="custom-control-label form-check-label" for="vera-moda">vera-moda</label>
                                        </div>
                                        <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                            <input type="checkbox" class="custom-control-input form-check-input" id="forever-21">
                                            <label class="custom-control-label form-check-label" for="forever-21">forever-21</label>
                                        </div>
                                        <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                            <input type="checkbox" class="custom-control-input form-check-input" id="roadster">
                                            <label class="custom-control-label form-check-label" for="roadster">roadster</label>
                                        </div>
                                        <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                            <input type="checkbox" class="custom-control-input form-check-input" id="only">
                                            <label class="custom-control-label form-check-label" for="only">only</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- color filter start here -->
                            <div class="collection-collapse-block open">
                                <h3 class="collapse-block-title">colors</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="color-selector">
                                        <ul>
                                            <li>
                                                <div class="color-1 active"></div> white (14)
                                            </li>
                                            <li>
                                                <div class="color-2"></div> brown(24)
                                            </li>
                                            <li>
                                                <div class="color-3"></div> red(18)
                                            </li>
                                            <li>
                                                <div class="color-4"></div> purple(10)
                                            </li>
                                            <li>
                                                <div class="color-5"></div> teal(9)
                                            </li>
                                            <li>
                                                <div class="color-6"></div> pink(11)
                                            </li>
                                            <li>
                                                <div class="color-7"></div> coral(15)
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- size filter start here -->
                            <div class="collection-collapse-block open">
                                <h3 class="collapse-block-title">size</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="size-selector">
                                        <div class="collection-brand-filter">
                                            <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                                <input type="checkbox" class="custom-control-input form-check-input" id="small">
                                                <label class="custom-control-label form-check-label" for="small">s</label>
                                            </div>
                                            <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                                <input type="checkbox" class="custom-control-input form-check-input" id="mediam">
                                                <label class="custom-control-label form-check-label" for="mediam">m</label>
                                            </div>
                                            <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                                <input type="checkbox" class="custom-control-input form-check-input" id="large">
                                                <label class="custom-control-label form-check-label" for="large">l</label>
                                            </div>
                                            <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                                <input type="checkbox" class="custom-control-input form-check-input" id="extralarge">
                                                <label class="custom-control-label form-check-label" for="extralarge">xl</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- price filter start here -->
                            <div class="collection-collapse-block border-0 open">
                                <h3 class="collapse-block-title">price</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="filter-slide">
                                        <input class="js-range-slider" type="text" name="my_range" value="" data-type="double">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- silde-bar colleps block end here -->

                        <!-- side-bar banner start here -->
                        <div class="collection-sidebar-banner">
                            <a href="javascript:void(0)"><img src="{{asset('/')}}website/assets/images/category/side-banner.png" class="img-fluid " alt=""></a>
                        </div>
                        <!-- side-bar banner end here -->

                    </div>
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="collection-product-wrapper">
                                        <div class="product-top-filter">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="filter-main-btn"><span class="filter-btn  "><i class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="product-filter-content">

                                                        <div class="collection-view">
                                                            <ul>
                                                                <li><i class="fa fa-th grid-layout-view"></i></li>
                                                                <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="collection-grid-view">
                                                            <ul>
                                                                <li><img src="{{asset('/')}}website/assets/images/category/icon/2.png" alt="" class="product-2-layout-view"></li>
                                                                <li><img src="{{asset('/')}}website/assets/images/category/icon/3.png" alt="" class="product-3-layout-view"></li>
                                                                <li><img src="{{asset('/')}}website/assets/images/category/icon/4.png" alt="" class="product-4-layout-view"></li>
                                                                <li><img src="{{asset('/')}}website/assets/images/category/icon/6.png" alt="" class="product-6-layout-view"></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-page-per-view">
                                                            <select>
                                                                <option value="High to low">24 Products Par Page</option>
                                                                <option value="Low to High">50 Products Par Page</option>
                                                                <option value="Low to High">100 Products Par Page</option>
                                                            </select>
                                                        </div>
                                                        <div class="product-page-filter">
                                                            <select>
                                                                <option value="High to low">Sorting items</option>
                                                                <option value="Low to High">50 Products</option>
                                                                <option value="Low to High">100 Products</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper-grid product">
                                            <div class="row">
                                                @foreach ($products as $product)
                                                    <div class="col-xl-3 col-md-4 col-6  col-grid-box">
                                                        <div class="product-box">
                                                            <div class="product-imgbox">
                                                                <div class="product-front">
                                                                    <a href="{{ route('product.details',['id'=>$product->id]) }}"> <img src="{{ asset($product->image) }}" class="img-fluid  " alt="product"> </a>
                                                                </div>
                                                                <div class="product-back">
                                                                    <a href="{{ route('product.details',['id'=>$product->id]) }}"> <img src="{{asset($product->image)}}" class="img-fluid  " alt="product"> </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-detail detail-center detail-inverse">
                                                                <div class="detail-title">
                                                                    <div class="detail-left">
                                                                        <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                                                        <a href="product.details">
                                                                            <h6 class="price-title">
                                                                                {{ $product->name }}
                                                                            </h6> </a>
                                                                    </div>
                                                                    <div class="detail-right">
                                                                        @if($product->discount_amount )
                                                                            <div class="check-price"> {{ $product->regular_price }}.tk</div>
                                                                            <div class="price">
                                                                                <div class="price"> {{ $product->selling_price }}.tk</div>
                                                                            </div>
                                                                        @else
                                                                            <div class="price">
                                                                                <div class="price"> {{ $product->regular_price }}.tk</div>
                                                                            </div>

                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="icon-detail">
                                                                    <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i data-feather="shopping-cart"></i> </button>
                                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"> <i data-feather="heart"></i> </a>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"> <i data-feather="eye"></i> </a>
                                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare"> <i data-feather="refresh-cw"></i> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="product-pagination">
                                            <div class="theme-paggination-block">
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                                        <nav aria-label="Page navigation">
                                                            <ul class="pagination">
                                                                <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a></li>
                                                                <li class="page-item "><a class="page-link" href="javascript:void(0)">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                                <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                                        <div class="product-search-count-bottom">
                                                            <h5>Showing Products 1-24 of 10 Result</h5></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->
@endsection
