@extends('customer.layout_index')

{{-- <link rel="stylesheet" href="{{ asset('css/donate.css') }}" /> --}}

@section('body')

<div class="container">
    <h1>Donate</h1>
    <div class="donation-form">
      {{-- <h2>Choose an amount:</h2><br> --}}
      <h3>Or Scan to pay:</h3>
      {{-- <select id="amount" name="amount">
        <option value="10">₹100/-</option>
        <option value="25">₹200/-</option>
        <option value="50">₹300/-</option>
        <option value="100">₹400/-</option>
      </select><br><br> --}}
      <button class="donate-button btn btn-primary">Donate Now</button><br><br>
    </div>
    <img width="50%" height="auto" src="{{ asset('img/qr.jpg') }}">
  </div>

@stop
