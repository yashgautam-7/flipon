
@extends('user.layout')
@php($step = 2)
@section('title','Address')
@section('content')

<h4>Address</h4>

<form method="POST" action="{{route('storeaddress')}}"  >
    @csrf
        <label> Enter Address </label> 
            <input class="form-control mb-2" type="text" name="address" placholder="User Address"></input> </br>
            <label>Country </label> 
            <input  class="form-control mb-2" type="text" name="country" placholder="Enter Country"></input> </br>
            <label> State</label> 
            <input class="form-control mb-2" type="text" name="state" placholder="Enter State"></input> </br>
            <label> City</label> 
            <input class="form-control mb-2" type="text" name="city" placholder="Enter City"></input> </br>
            <label> Pincode</label> 
            <input class="form-control mb-2" type="text" name="pincode" placholder="Enter Pincode"></input> </br>
            
            <button type="submit"> Save Address</button>
</form>
@endsection

@section('side')
<h5>Why we need this?</h5>
<p>This address will be used for billing and delivery.</p>
@endsection