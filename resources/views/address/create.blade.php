
@extends('user.layout')
@php($step = 2)
@section('title','Address')
@section('content')

<div class="brand">
    <b>To Get Your Order Same Day</b><span class="text-primary"> <b>Mention Delivery Address </b></span>
</div>


<form method="POST" action="{{route('storeaddress')}}"  >
    @csrf
            <div class="mb-2">
                <label class="form-label"><b> Enter Address</b></label>
                <input class="form-control" type="text" name="address" placholder="User Address"></input> </br>
            </div>
            <div class="mb-2">
                <label class="form-label"><b>Country</b> </label> 
                <input  class="form-control" type="text" name="country" placholder="Enter Country"></input> </br>
            </div>
            <div class="mb-2">
                <label class="form-label"> <b>State</b></label> 
                <input class="form-control" type="text" name="state" placholder="Enter State"></input> </br>
            </div>
             <div class="mb-2">
                <label class="form-label" > <b>City</b></label> 
                <input class="form-control " type="text" name="city" placholder="Enter City"></input> </br>
            </div>

              <div class="mb-2">
                <label class="form-label"> <b>Pincode</b></label> 
                <input class="form-control " type="text" name="pincode" placholder="Enter Pincode"></input> </br>
            </div>
            <button type="submit" class="btn btn-amazon w-100 mb-3"> Save Address</button>
</form>
@endsection

@section('side')
<h4 class="mb-4">
   Your Details 100% Secure With Us.
</h4>


<div class="info-item">
    <div class="info-icon">🧾</div>
    <div>
        <strong> Why we need this?</strong>
        <p class="mb-0 small">
           This address will be used for billing and delivery.
        </p>
    </div>
</div>

<div class="info-item">
    <div class="info-icon">🚚</div>
    <div>
        <strong>Free Delivery on first order</strong>
        <p class="mb-0 small">
            Get free delivery on your first purchase.
        </p>
    </div>
</div>


@endsection