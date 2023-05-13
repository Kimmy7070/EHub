@extends('customer.layout_index')

<!-- Favicon -->
<link href="img/favicon.ico" rel="shortcut icon" />

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Stylesheets -->
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/animate.css') }}" />

@section('body')

<!-- Page Info -->
{{-- <div class="page-info-section page-info">
    {{-- <div class="container">
        <div class="site-breadcrumb">
            <a href="">Home</a> /
            <a href="">Sales</a> /
            <a href="">Bags</a> /
            <span>Cart</span>
        </div>
        <img src="img/page-info-art.png" alt="" class="page-info-art">
    </div>
</div> --}}
<!-- Page Info end -->


<!-- Page -->
<div class="page-area cart-page spad">
    <div class="container">
        <div class="cart-table">
            <table>
                <thead>
                    <tr>
                        <th class="product-th">Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th class="total-th">Total</th>
                        <th class="total-th">Remove</th>
                    </tr>
                </thead>

                @foreach ($data as $product)


                <tbody>
                    <tr>
                        <td class="product-col">
                            <img src="{{ url('storage/' . $product->img1) }}" alt="">
                            <div class="pc-title">
                                <h4>{{$product->name}}</h4>
                                {{-- <a href="#">Edit Product</a> --}}
                            </div>
                        </td>
                        <td class="price-col">{{$product->mrp}}</td>
                        <td class="quy-col">
                            <div class="quy-input">
                                <span>Qty</span>
                                <input type="number" value="{{$product->quantity}}" min="1">
                                {{-- max = "{{$product->quantity}}" --}}
                            </div>
                        </td>
                        <td class="total-col">{{$product->price}}</td>
                        <td class="total-col"><i class="fa-solid fa-trash mr-4"></i></td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
        <div class="row cart-buttons">
            <div class="col-lg-5 col-md-5">
                <a href="{{url('/customer/home')}}"><div class="site-btn btn-continue">Continue shopping</div></a>
            </div>
            <div class="col-lg-7 col-md-7 text-lg-right text-left">
                <a href="{{url('/customer/checkout')}}"><div class="site-btn btn-line btn-update">Checkout</div></a>
            </div>
        </div>
    </div>
    <div class="card-warp">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="shipping-info">
                        <h4>Shipping method</h4>
                        <p>Select the one you want</p>
                        <div class="shipping-chooes">
                            {{-- <div class="sc-item">
                                <input type="radio" name="sc" id="one">
                                <label for="one">Next day delivery<span>&#8377; 100</span></label>
                            </div> --}}
                            <div class="sc-item">
                                <input type="radio" name="sc" id="two">
                                <label for="two">Standard delivery<span>&#8377;0 (Opening Offer)</span></label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="three">
                                <label for="three">Personal Pickup<span>Free</span></label>
                            </div>
                        </div>
                        {{-- <h4>Cupon code</h4>
                        <p>Enter your cupone code</p>
                        <div class="cupon-input">
                            <input type="text">
                            <button class="site-btn">Apply</button>
                        </div> --}}
                    </div>
                </div>
                <div class="offset-lg-2 col-lg-6">
                    <div class="cart-total-details">
                        <h4>Cart total</h4>
                        <p>Final Info</p>
                        <ul class="cart-total-card">
                            <li>Subtotal<span>{{$product->price}}</span></li>
                            <li>Shipping<span>Free</span></li>
                            <li class="total">Total<span>{{$product->price}}</span></li>
                        </ul>
                        <a class="site-btn btn-full" href="checkout.html">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page end -->

@stop
