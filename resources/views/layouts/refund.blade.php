@extends('layout')

<link rel="stylesheet" href="{{ asset('css/refund.css') }}" />

@section('body')

<div class="containery">
    <h1 class="h1">Cancellation and Refund Policy</h1>
    <p class="p">
      Thank you for using our services. If you are not entirely satisfied with your purchase, we're here to help.
    </p>
    <h2 class="h2">Cancellation Policy</h2>
    <p class="p">
      You can cancel your order within 24 hours of purchase. To request a cancellation, please contact us with your order details at<a href="mailto:e-hub.com">e-hub.com</a>
    </p>
    <h2 class="h2">Refund Policy</h2>
    <p class="p">
      We offer a 30-day money-back guarantee on all our products. If you are not satisfied with your purchase, you can request a refund within 30 days of the purchase date.
    </p>
    <p class="highlight">
      Please note that refunds may take up to 5-7 business days to process.
    </p>
</div>

@stop
