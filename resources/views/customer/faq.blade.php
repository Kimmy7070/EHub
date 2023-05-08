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
                <h3>About Our Current Sale Event</h3>
            </label>
                <div class="content"><p>Saepe perspiciatis ea. Incidunt blanditiis enim mollitia qui voluptates. Id rem nulla
                tenetur nihil in unde rerum. Quae consequatur placeat qui cumque earum eius omnis
                quos.</p></div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc2">
            <label for="acc2">
                <h2>02</h2>
                <h3>Change Your Language Preference</h3>
            </label>
                <div class="content"><p>Id ipsam non ut. Placeat doloremque deserunt quia tenetur inventore laboriosam
                dolores totam odio. Aperiam incidunt et. Totam ut quos sunt atque modi molestiae
                dolorem.</p></div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc3">
            <label for="acc3">
                <h2>03</h2>
                <h3>Get Started with E-HUB</h3>
            </label>
            <div class="content"><p>Enim inventore in consequuntur ipsam voluptatem consequatur beatae. Nostrum
                consequuntur voluptates et blanditiis.</p>
            </div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc4">
            <label for="acc4">
                <h2>04</h2>
                <h3>Where's My Order?</h3>
            </label>
            <div class="content"><p>Enim inventore in consequuntur ipsam voluptatem consequatur beatae. Nostrum
                consequuntur voluptates et blanditiis.</p>
            </div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc5">
            <label for="acc5">
                <h2>05</h2>
                <h3>Returns & Refunds</h3>
            </label>
            <div class="content"><p>Enim inventore in consequuntur ipsam voluptatem consequatur beatae. Nostrum
                consequuntur voluptates et blanditiis.</p>
            </div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc6">
            <label for="acc6">
                <h2>06</h2>
                <h3>Manage Your Account Information</h3>
            </label>
            <div class="content"><p>Enim inventore in consequuntur ipsam voluptatem consequatur beatae. Nostrum
                consequuntur voluptates et blanditiis.</p>
            </div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc7">
            <label for="acc7">
                <h2>07</h2>
                <h3>Manage your Account</h3>
            </label>
            <div class="content"><p>Enim inventore in consequuntur ipsam voluptatem consequatur beatae. Nostrum
                consequuntur voluptates et blanditiis.</p>
            </div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc8">
            <label for="acc8">
                <h2>08</h2>
                <h3>Customer Service</h3>
            </label>
            <div class="content"><p>Enim inventore in consequuntur ipsam voluptatem consequatur beatae. Nostrum
                consequuntur voluptates et blanditiis.</p>
            </div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc9">
            <label for="acc9">
                <h2>09</h2>
                <h3>Other Topic & Help Sites</h3>
            </label>
            <div class="content"><p>Enim inventore in consequuntur ipsam voluptatem consequatur beatae. Nostrum
                consequuntur voluptates et blanditiis.</p>
            </div>
        </div>
        </div>

</main><!-- End #main -->

@stop
