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
<style>
    input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        display: none;
      }
</style>
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
            <h1>Previous Orders</h1>
            <div class="cart-table">
                <table>
                    <thead>
                        <tr>
                            <th class="product-th">Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th class="total-th">Total</th>
                            {{-- <th class="total-th">Edit Quantity</th> --}}
                        </tr>
                    </thead>
                    {{-- @foreach ($cart_id as $cart) --}}
                        @foreach ($data as $product)
                            <tbody>
                                <tr>
                                    <td class="product-col">
                                        <img src="{{ url('storage/' . $product->img1) }}" alt="">
                                        <div class="pc-title">
                                            <h4>{{ $product->name }}</h4>
                                            {{-- <a href="#">Edit Product</a> --}}
                                        </div>
                                    </td>
                                    <td class="price-col">&#8377;{{ $product->price }}</td>
                                    <td class="quy-col">
                                        <div class="quy-input">
                                            {{-- <span>Qty</span> --}}
                                            {{$product->cart_quantity}}
                                            {{-- cart quantity --}}

                                        </div>
                                    </td>
                                    <td class="total-col">&#8377;{{ $product->price * $product->cart_quantity }}</td>
                                </tr>
                            </tbody>
                        @endforeach
                    {{-- @endforeach --}}
                </table>
            </div>
            <div class="row cart-buttons">
                <div class="col-lg-5 col-md-5">
                    <a href="{{ url('/customer/home') }}">
                        <div class="site-btn btn-continue">Continue shopping</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page end -->
    {{-- <script>
        function submitform() {
            document.getElementById("mySelect").submit();
        }
    </script> --}}
@stop
