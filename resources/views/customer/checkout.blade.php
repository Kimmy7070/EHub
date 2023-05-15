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

    <!-- Page -->
    <div class="page-area cart-page spad">
        <div class="container">
            <form class="checkout-form" action="{{url('order_backend')}}" method="get" enctype="">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="checkout-title">Billing Address</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="fname" placeholder="First Name *" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="lname" placeholder="Last Name *" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea type="text" name="address" placeholder="Address *" required></textarea>

                                    <input type="text" name="zip" placeholder="Zipcode *" required>

                                    <input type="text" name="city" placeholder="City/Town *" required>

                                    <input type="text" name="phone" placeholder="Phone no *" required>

                                    <input type="email" name="email" placeholder="Email Address *" required>
                                    <div style="background-color: #fff;outline: none;border: none" class="order-card">
                                        <a href="{{url('/customer/cart')}}" style="text-decoration: none" class="site-btn btn-full">Back to Cart</a>
                                    </div>
                                    {{-- <div class="checkbox-items">
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
                                    </div> --}}
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
                                            @php
                                                // $data = Cart::getContent();
                                                $total=0;

                                            @endphp
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>{{ $item->name }} <strong> × {{ $item->quantity }}</strong></td>
                                                    <td>&#8377;{{ $item->price * $item->quantity}}</td>
                                                </tr>
                                                @php
                                                    $total += $item->price * $item->quantity;
                                                @endphp
                                            @endforeach
                                            {{-- <tr>
                                                <td>Cocktail Yellow dress</td>
                                                <td>$59.90</td>
                                            </tr>
                                            <tr>
                                                <td>SubTotal</td>
                                                <td>$59.90</td>
                                            </tr> --}}
                                            <tr class="cart-subtotal">
                                                <td>Shipping</td>
                                                <td>Free</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <th>&#8377;{{$total}}</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="pm-item">
                                        <input type="radio" checked name="pm" id="one" value="COD">
                                        <label for="one">Cash on delievery</label>
                                    </div>
                                    <div class="pm-item">
                                        <input type="radio" name="pm" id="two" value="RazorPay">
                                        <label for="two">Credit card/Debit card/UPI</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="site-btn btn-full">Place Order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Page -->

@stop
