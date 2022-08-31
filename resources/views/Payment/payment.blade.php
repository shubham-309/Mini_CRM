@extends('layouts.admin')

@section('content')

<link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
<script src="https://js.stripe.com/v3/"></script>

@if ($message = Session::get('success'))
    <div class="success">
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="error">
        <strong>{{ $message }}</strong>
    </div>
@endif

<form action="{{ url('charge') }}" method="post" id="payment-form">
    <div class="card-body">
        <label>Your Name On Card</label>
        <p><input type="text" name="amount" placeholder="Enter Amount" /></p>
        <label>Your Email</label>
        <p><input type="email" name="email" placeholder="Enter Email" /></p>
        <br>
        <label for="card-element">
        Credit or debit card
        </label>
        <div id="card-element">
        <!-- A Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
    </div>
    <p><button>Submit Payment</button></p>
    {{ csrf_field() }}
</form>
<script>
var publishable_key = '{{ env('STRIPE_PUBLISHABLE_KEY') }}';
</script>
<script src="{{ asset('/js/card.js') }}"></script>

@endsection
