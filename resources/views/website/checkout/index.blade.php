@extends('website.master')

@section('title')
    Checkout
@endsection

@section('body')
    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>checkout</h2>
                            <ul>
                                <li><a href="index.html">home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="javascript:void(0)">checkout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- section start -->
    <section class="section-big-py-space b-g-light">
        <div class="custom-container">
            <div class="checkout-page contact-page">
                <div class="checkout-form">
                    <form action="{{ route('new-order') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-title">
                                    <h3>Order checkout Information</h3>
                                </div>
                                <div class="theme-form">
                                    <div class="row check-out ">

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Full Name</label>
                                            @if(isset($customer->name))
                                                <input type="text" class="form-control" name="name" value="{{ $customer->name }}" readonly required>
                                            @else
                                                <input type="text" class="form-control" name="name"  placeholder="Enter Your Name" required>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label class="field-label">Phone</label>
                                            @if(isset($customer->phone))
                                                <input type="text" class="form-control" name="phone" value="{{ $customer->phone }}" readonly required>
                                            @else
                                                <input type="text" class="form-control" name="phone" id="phone"  placeholder="Enter Your Phone" required>
                                                <span class="text-danger" id="phoneError"></span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label class="field-label">Email Address</label>
                                            @if(isset($customer->email))
                                                <input type="email" class="form-control" name="email" value="{{ $customer->email }}" readonly required>
                                            @else
                                                <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                            <label class="field-label">Area</label>
                                            <select name="area" class="form-control" required onchange="getPrice(this.value)">
                                                <option value="" disabled selected> -- Select Area -- </option>
                                                @foreach($areas as $area)
                                                    <option value="{{ $area->id }}">{{ $area->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <label class="field-label">Delivery Address</label>
                                            <textarea  name="address" class="form-control pt-2" placeholder="Delivery Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-details theme-form  section-big-mt-space">
                                    <div class="order-box">
                                        <div class="title-box">
                                            <div>Product <span>Total</span></div>
                                        </div>
                                        <table class="table">
                                            <tr>
                                                <th>Product Info</th>
                                                <th>Price</th>
                                            </tr>
                                            @foreach($products as $product)
                                            <tr>
                                                <td>
                                                    <b>Name: </b>{{ $product->name }} <br/>
                                                    <b>Price: </b>{{ $product->price }},
                                                    <b>Qty: </b>{{ $product->qty }} <br/>

                                                </td>
                                                <td>{{ round($product->subtotal) }}</td>
                                            </tr>
                                            @endforeach
                                        </table>
                                        <input type="hidden" id="subTotal" value="{{ round(Cart::subtotal()) }}">
                                        <ul class="sub-total">
                                            <li>Subtotal (Tk ) <span class="count"> {{ number_format(round(Cart::subtotal())) }}</span></li>
                                            <li>Tax Amount ( 15% ) <span class="count" id="taxTotal"> {{ $tax = round((Cart::subtotal() * 0.15)) }}</span></li>
                                            <li>Shipping
                                                <div class="shipping">
                                                    <div class="shopping-option">
                                                        @php($shipping = 0)
                                                        <input type="hidden" name="shipping_total" value="{{ $shipping }}" id="showPriceInput">
                                                        <label for="free-shipping"  id="showPrice">{{ $shipping }}</label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="total">
                                            <li>Total Payable<span class="count" id="totalPayable">{{ $orderTotal = round(Cart::subtotal()) + $tax + $shipping }}</span></li>
                                        </ul>
                                        <input type="hidden" value="{{ $tax }}" name="tax_total">
                                        <input type="hidden" value="{{ $orderTotal }}" name="order_total">
                                    </div>
                                    <div class="payment-box">
                                        <div class="upper-box">
                                            <div class="payment-options">
                                                <ul>
                                                    <li>
                                                        <div class="radio-option">
                                                            <input type="radio" checked name="payment_method" value="Cash" id="payment-2">
                                                            <label for="payment-2">Cash On Delivery<span
                                                                    class="small-text">Please send a check to Store Name,
                                                                    Store Street, Store Town, Store State / County, Store
                                                                    Postcode.</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radio-option paypal">
                                                            <input type="radio" name="payment_method" value="Online" id="payment-3">
                                                            <label for="payment-3">Online Payment</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <input type="submit" class="btn-normal btn" value="Place Order"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
