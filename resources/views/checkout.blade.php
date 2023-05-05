@extends('layout')
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
<div class="page-info-section page-info">
    <div class="container">
        <div class="site-breadcrumb">
            <a href="">Home</a> /
            <a href="">Sales</a> /
            <a href="">Bags</a> /
            <a href="">Cart</a> /
            <span>Checkout</span>
        </div>
        <img src="img/page-info-art.png" alt="" class="page-info-art">
    </div>
</div>
<!-- Page Info end -->


<!-- Page -->
<div class="page-area cart-page spad">
    <div class="container">
        <form class="checkout-form">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="checkout-title">Billing Address</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="First Name *">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Last Name *">
                        </div>
                        <div class="col-md-12">
                            <input type="text" placeholder="Company">
                            <select>
                                <option>Country *</option>
                                <option>USA</option>
                                <option>UK</option>
                                <option>BANGLADESH</option>
                            </select>
                            <input type="text" placeholder="Address *">
                            <input type="text">
                            <input type="text" placeholder="Zipcode *">
                            <select>
                                <option>City/Town *</option>
                            </select>
                            <select>
                                <option>Province *</option>
                            </select>
                            <input type="text" placeholder="Phone no *">
                            <input type="email" placeholder="Email Address *">
                            <div class="checkbox-items">
                                <div class="ci-item">
                                    <input type="checkbox" name="a" id="tandc">
                                    <label for="tandc">Terms and conditions</label>
                                </div>
                                <div class="ci-item">
                                    <input type="checkbox" name="b" id="newaccount">
                                    <label for="newaccount">Create an account</label>
                                    <input type="password" placeholder="password">
                                </div>
                                <div class="ci-item">
                                    <input type="checkbox" name="c" id="newsletter">
                                    <label for="newsletter">Subscribe to our newsletter</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="order-card">
                        <div class="order-details">
                            <div class="od-warp">
                                <h4 class="checkout-title">Your order</h4>
                                <table class="order-table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Cocktail Yellow dress</td>
                                            <td>$59.90</td>
                                        </tr>
                                        <tr>
                                            <td>SubTotal</td>
                                            <td>$59.90</td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <td>Shipping</td>
                                            <td>Free</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <th>$59.90</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method">
                                <div class="pm-item">
                                    <input type="radio" name="pm" id="one">
                                    <label for="one">Paypal</label>
                                </div>
                                <div class="pm-item">
                                    <input type="radio" name="pm" id="two">
                                    <label for="two">Cash on delievery</label>
                                </div>
                                <div class="pm-item">
                                    <input type="radio" name="pm" id="three">
                                    <label for="three">Credit card</label>
                                </div>
                                <div class="pm-item">
                                    <input type="radio" name="pm" id="four" checked>
                                    <label for="four">Direct bank transfer</label>
                                </div>
                            </div>
                        </div>
                        <button class="site-btn btn-full">Place Order</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Page -->

@stop
