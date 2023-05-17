@extends('customer.layout_index')

<link rel="stylesheet" href="{{ asset('css/blog.css') }}" />

@section('body')

<!--Blog Section-->
<section id="blog">

    <!--heading-->
    <div class="blog-heading">
        <span>Our Recent Posts</span>
        <h3>Blog</h3>
    </div>

    <!--Blog Container-->
    <div class="blog-container">

        <!--box 1-->
        <div class="blog-box">

            <!--blog image-->
            <div class="blog-img">
                <img src="3.jpg">
            </div>

            <!--blog text-->
            <div class="blog-text">
                <span>17th May 2023 | Web Designer</span>
                <a href="#" class="blog-title">What has happened of all the Web Design Ideas?</a>
                <p>Learn why responsive web design is crucial for a seamless user experience across all devices.</p>
                <a href="#">Read More</a>
            </div>

        </div>

        <!--box 2-->
        <div class="blog-box">

            <!--blog image-->
            <div class="blog-img">
                <img src="3.jpg">
            </div>

            <!--blog text-->
            <div class="blog-text">
                <span>17th May 2023 | Web Designer</span>
                <a href="#" class="blog-title">What has happened of all the Web Design Ideas?</a>
                <p>Learn why responsive web design is crucial for a seamless user experience across all devices.</p>
                <a href="#">Read More</a>
            </div>

        </div>

        <!--box 3-->
        <div class="blog-box">

            <!--blog image-->
            <div class="blog-img">
                <img src="3.jpg">
            </div>

            <!--blog text-->
            <div class="blog-text">
                <span>17th May 2023 | Web Designer</span>
                <a href="#" class="blog-title">What has happened of all the Web Design Ideas?</a>
                <p>Learn why responsive web design is crucial for a seamless user experience across all devices.</p>
                <a href="#">Read More</a>
            </div>

        </div>
    </div>
</section>

@stop
