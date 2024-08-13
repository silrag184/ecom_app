@extends('website.master')

@section('title')
    Cart
@endsection


@section('body')
    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>cart</h2>
                            <ul>
                                <li><a href="javascript:void(0)">home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="javascript:void(0)">cart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="cart-section section-big-py-space b-g-light">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table cart-table table-responsive-xs">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">image</th>
                                <th scope="col">product name</th>
                                <th scope="col">price</th>
                                <th scope="col">quantity</th>
                                <th scope="col">total</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($carts as $cart)
                            <tr>
                                <td>
                                    <a href="javascript:void(0)"><img src="{{ asset($cart->options->image) }}" alt="cart" class=" "></a>
                                </td>
                                <td class="text-start">
                                    <a href="javascript:void(0)">
                                        <b>Name : </b> {{ $cart->name }} <br/>
                                        <b>Code :</b> {{$cart->options->code}} <br/>
                                        <b>Color :</b> {{$cart->options->color}},
                                        <b>Size :</b> {{$cart->options->size}} <br/>
                                    </a>
                                    <div class="mobile-cart-content">
                                        <div class="col-xs-3">
                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <input type="text" name="quantity" class="form-control input-number"
                                                        value="{{ $cart->qty }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color">{{ $cart->price }}</h2>
                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color"><a href="javascript:void(0)" class="icon"><i class="ti-close"></i></a></h2>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h2>{{ $cart->price }}</h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <form action="{{ route('carts.update', $cart->rowId) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="input-group">
                                                <input type="number" name="quantity" min="1" class="form-control input-number" value="{{ $cart->qty }}">
                                                <input type="submit" class="btn btn-success btn-sm" value="Update"/>
                                            </div>
                                        </form>

                                    </div>
                                </td>
                                <td>
                                    <h2 class="td-color">{{ $cart->price * $cart->qty }}</h2>
                                </td>
                                <td>
                                    <form action="{{ route('carts.destroy',$cart->rowId) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn"><i class="fa fa-close"></i></button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table cart-table table-responsive-md w-50 float-end">
                        <tr>
                            <td>Total Price</td>
                            <td>
                                <h2>{{ round(Cart::subtotal()) }}</h2>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row cart-buttons">
                <div class="col-12"><a href="{{ route('product') }}" class="btn btn-normal">continue shopping</a> <a
                        href="{{route('checkout')}}" class="btn btn-normal ms-3">check out</a></div>
            </div>
        </div>
    </section>
    <!--section end-->
@endsection
