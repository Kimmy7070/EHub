@extends('customer.layout')

<link rel="stylesheet" href="{{ asset('css/faq.css') }}" />

@section('body')

<main id="main" class="main">

    <div class="container">
        <h1>How Can We help You?</h1>
        <div class="tab">
            <input type="radio" name="acc" id="acc1">
            <label for="acc1">
                <h2>01</h2>
                <h3>About Our Current Summer Festival Sale Event</h3>
            </label>
                <div class="content"><p>At EHUB, we're committed to providing you with the best shopping experience possible. That's why we offer a wide selection of electronics at competitive prices, backed by our knowledgeable and friendly customer service team. Whether you need help finding the perfect product or have questions about your purchase, we're here to assist you every step of the way.

                    So don't wait any longer - visit our website today and take advantage of our summer festival sale. With unbeatable deals on top electronics brands, free shipping on all orders, and exclusive promotions for our valued customers, there's never been a better time to upgrade your tech. We look forward to serving you and helping you find the perfect product to meet your needs.</p></div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc2">
            <label for="acc2">
                <h2>02</h2>
                <h3>Change Your Language Preference</h3>
            </label>
                <div class="content"><p> Currently, our website only supports one language. However, we are working on implementing a language preference feature in the near future to make our site accessible to customers around the world. We understand the importance of being able to browse and shop in your preferred language, and we're committed to providing the best possible user experience for our customers.

                    Please stay tuned for updates on when this feature will be available. In the meantime, our customer support team is available to assist you with any questions or concerns you may have. We appreciate your patience and understanding as we work to improve our website and make it more inclusive for all users.</p></div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc3">
            <label for="acc3">
                <h2>03</h2>
                <h3>Get Started with E-HUB</h3>
            </label>
            <div class="content"><p>Getting started with E-HUB is easy! Simply visit our website and create an account by clicking on the "Login" button from the dropdown of profile icon and Register. Once you've filled out the required fields, you'll be able to browse our wide selection of electronics and make purchases with ease.</p>
            </div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc4">
            <label for="acc4">
                <h2>04</h2>
                <h3>Where's My Order?</h3>
            </label>
            <div class="content"><p>
                We apologize for the delay in your order delivery and the inconvenience caused. We are experiencing technical difficulties with our tracking system, but we have sent you an email with the estimated delivery date. Please monitor your email for further updates on orders. If you have any questions or concerns, please contact our customer service team. Thank you for your patience and understanding.</p>
            </div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc5">
            <label for="acc5">
                <h2>05</h2>
                <h3>Returns & Refunds</h3>
            </label>
            <div class="content"><p>Our return and refund policy for electronic items is straightforward. If you receive a defective or damaged product, we offer a hassle-free return process within 30 days of the delivery date. We will either replace the product or issue a full refund upon receipt of the returned item. Please contact our customer service team to initiate the return process. Thank you for your business.
                We strive to provide our customers with the best possible shopping experience, and we are committed to resolving any issues that may arise. If you have any questions or concerns regarding our return and refund policy, please do not hesitate to <a href="{{ url('/contactus') }}">contact us</a>.</p>
            </div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc6">
            <label for="acc6">
                <h2>06</h2>
                <h3>Manage Your Account Information</h3>
            </label>
            <div class="content"><p>Managing your account information is easy on our electronic e-commerce website. Simply log in to your account, and you can update your personal information, such as your name, address, and payment details. You can also view your order history, track your orders, and manage your wish list. If you have any issues with managing your account information, please contact our customer service team for assistance. Thank you for shopping with us.</p>
            </div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc7">
            <label for="acc7">
                <h2>07</h2>
                <h3>Manage your Account</h3>
            </label>
            <div class="content"><p>You can easily manage your account on our electronic e-commerce website by logging in and updating your personal information, tracking orders, and managing your wish list. If you have any issues with managing your account, please contact our customer service team for assistance. Thank you for shopping with us.</p>
            </div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc8">
            <label for="acc8">
                <h2>08</h2>
                <h3>Customer Service</h3>
            </label>
            <div class="content"><p>
                Our customer service team is available to assist you with any questions or concerns you may have about our electronic e-commerce website. You can reach us by visiting our <a href="{{ url('/contactus') }}">Contact us</a> page and filling out the form or by emailing us directly. We strive to provide excellent customer service and will do our best to assist you promptly. Thank you for shopping with us.</p>
            </div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc9">
            <label for="acc9">
                <h2>09</h2>
                <h3>Other Topic & Help Sites</h3>
            </label>
            <div class="content"><p>If you still need further assistance, you can contact our customer service team by visiting our <a href="{{ url('/contactus') }}">Contact us</a> page or by emailing us directly at <a href="jaishreeram@gmail.com">our Email</a>. Thank you for choosing our website for your electronic needs.</p>
            </div>
        </div>
        </div>

</main><!-- End #main -->

@stop
