@extends('user.layout')
@php($step = 1)
@section('title','Register')
@section('content')

<div class="brand">
   <b>Let us create</b><span class="text-primary"> <b>Your Account</b></span>
</div>
<h5 class="mb-3">Enter your email to get started</h5>
                <form action="{{route('userregister')}}"  method="POST">
                    @csrf
                     <div class="mb-2">
                        <label class="form-label"><b>Name</b></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter User Name" /> </br>
                    </div> 

                    <div class="mb-2">
                        <label class="form-label"><b>Email</b></label>
                        <input type="email" class="form-control" name="email" placeholder="Enter User Mail" / ></br>
                    </div>

                      <div class="mb-2">
                    <label class="form-label"><b>Phone</b></label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter User Number" / ></br>
                    </div>

                     <div class="mb-2">
                    <label class="form-label"><b>Password</b></label>
                    <input type="password" class="form-control" name="password" placholder="Enter Password" / ></br>
                    </div>

                       <div class="mb-2">  
                    <label class="form-label"><b>Confirm Password</b></label>
                    <input type="password" class="form-control" name="password_confirmation" placholder="Confirm Password" / ></br></br>
                    </div>

                    <button type="submit"  class="btn btn-amazon w-100 mb-3"> Create Account </button>
                </form>

                <p class="small">
                   Already an Account?  <a href="#">Sign In</a>
                </p>
               
@endsection

@section('side')
<h4 class="mb-4">
    Reshape buying for your organisation
</h4>


<div class="info-item">
    <div class="info-icon">🚚</div>
    <div>
        <strong>Free Delivery on first order</strong>
        <p class="mb-0 small">
            Get free delivery on your first purchase.
        </p>
    </div>
</div>

<div class="info-item">
    <div class="info-icon">🧾</div>
    <div>
        <strong>GST Invoice & Bulk Discounts</strong>
        <p class="mb-0 small">
            Save up to 18% more with GST input credit and multi-unit discounts.
        </p>
    </div>
</div>

<div class="info-item">
    <div class="info-icon">📊</div>
    <div>
        <strong>Daily New Product Update</strong>
        <p class="mb-0 small">
            Get Notify When Some Update.
        </p>
    </div>
</div>
@endsection
