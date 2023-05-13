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

    <div class="page-area product-page spad">
        @foreach ($data->slice(0, 4) as $product)
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <figure>
                            <img class="product-big-img" src="{{ url('storage/' . $product->img1) }}" alt="">
                        </figure>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track">
                                <div class="pt" data-imgbigurl="{{ url('storage/' . $product->img1) }}"><img
                                        src="{{ url('storage/' . $product->img1) }}" alt=""></div>
                                <div class="pt" data-imgbigurl="{{ url('storage/' . $product->img2) }}"><img
                                        src="{{ url('storage/' . $product->img2) }}" alt=""></div>
                                <div class="pt" data-imgbigurl="{{ url('storage/' . $product->img3) }}"><img
                                        src="{{ url('storage/' . $product->img3) }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-content">
                            <h2>{{ $product->name }}</h2>
                            <div class="pc-meta">
                                <h4 class="price">{{ $product->price }}</h4>
                                <div class="review">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star is-fade"></i>
                                    </div>
                                    {{-- <span>(2 reviews)</span> --}}
                                </div>
                            </div>
                            <p>{{ $product->short_desc }}</p>
                            <div class="color-choose">
                                <span>Colors:</span>
                                <div class="cs-item">
                                    <input type="radio" name="cs" id="black-color" checked>
                                    <label class="cs-black" for="black-color"></label>
                                </div>
                                <div class="cs-item">
                                    <input type="radio" name="cs" id="blue-color">
                                    <label class="cs-blue" for="blue-color"></label>
                                </div>
                                <div class="cs-item">
                                    <input type="radio" name="cs" id="yollow-color">
                                    <label class="cs-yollow" for="yollow-color"></label>
                                </div>
                                <div class="cs-item">
                                    <input type="radio" name="cs" id="orange-color">
                                    <label class="cs-orange" for="orange-color"></label>
                                </div>
                            </div>
                            <div class="size-choose">
                                <span>Amount:</span>
                                <div class="sc-item">
                                    <input type="number" max="10" value="1" class="mt-1" min="1" name="sc"
                                        id="l-size">
                                    {{-- <label for="l-size">L</label> --}}
                                </div>

                            </div>
                            <a href="{{url('/customer/cart/add_to_cart_backend', ['user_id'=>Auth::user()->id, 'product_id'=>$product->id])}}" class="site-btn btn-line">ADD TO CART</a>
                            <a href="#" class="site-btn btn-line">BUY NOW</a>
                        </div>
                    </div>
                </div>
                <div class="product-details">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <ul class="nav" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1"
                                        role="tab" aria-controls="tab-1" aria-selected="true">Description</a>
                                </li>
                                {{-- <li class="nav-item">
                            <a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Additional information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Reviews (0)</a>
                        </li> --}}
                            </ul>
                            <div class="tab-content">
                                <!-- single tab content -->
                                <div class="tab-pane fade show active" id="tab-1" role="tabpanel"
                                    aria-labelledby="tab-1">
                                    <p>{{ $product->desc }}</p>
                                </div>
                                {{-- <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                        </div>
                        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">

                        </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center rp-title">
                    <h5>Related products</h5>
                </div>
                <div class="row">
                    @foreach ($alldata->slice(0, 4) as $product_ref)
                        <div class="col-lg-3">
                            <div class="product-item">
                                <figure>
                                    <img src="{{ url('storage/' . $product_ref->img1) }}" alt="">
                                    <div class="pi-meta">
                                        <div class="pi-m-left">
                                            <img src="img/icons/eye.png" alt="">
                                            <p>quick view</p>
                                        </div>
                                        <div class="pi-m-right">
                                            <img src="img/icons/heart.png" alt="">
                                            <p>save</p>
                                        </div>
                                    </div>
                                </figure>
                                <div class="product-info">
                                    <h6>{{ $product_ref->name }}</h6>
                                    <p>{{ $product_ref->price }}</p>
                                    <a href="{{url('/customer/cart/add_to_cart_backend', ['user_id'=>Auth::user()->id, 'product_id'=>$product_ref->id])}}" class="site-btn btn-line">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    {{-- <div class="col-lg-3">
                        <div class="product-item">
                            <figure>
                                <img src="img/products/2.jpg" alt="">
                                <div class="bache">NEW</div>
                                <div class="pi-meta">
                                    <div class="pi-m-left">
                                        <img src="img/icons/eye.png" alt="">
                                        <p>quick view</p>
                                    </div>
                                    <div class="pi-m-right">
                                        <img src="img/icons/heart.png" alt="">
                                        <p>save</p>
                                    </div>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h6>Hype grey shirt</h6>
                                <p>$19.50</p>
                                <a href="#" class="site-btn btn-line">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <figure>
                                <img src="img/products/3.jpg" alt="">
                                <div class="pi-meta">
                                    <div class="pi-m-left">
                                        <img src="img/icons/eye.png" alt="">
                                        <p>quick view</p>
                                    </div>
                                    <div class="pi-m-right">
                                        <img src="img/icons/heart.png" alt="">
                                        <p>save</p>
                                    </div>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h6>long sleeve jacket</h6>
                                <p>$59.90</p>
                                <a href="#" class="site-btn btn-line">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <figure>
                                <img src="img/products/4.jpg" alt="">
                                <div class="bache sale">SALE</div>
                                <div class="pi-meta">
                                    <div class="pi-m-left">
                                        <img src="img/icons/eye.png" alt="">
                                        <p>quick view</p>
                                    </div>
                                    <div class="pi-m-right">
                                        <img src="img/icons/heart.png" alt="">
                                        <p>save</p>
                                    </div>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h6>Denim men shirt</h6>
                                <p>$32.20 <span>RRP 64.40</span></p>
                                <a href="#" class="site-btn btn-line">ADD TO CART</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        @endforeach
    </div>
    <!-- Page end -->

@stop
