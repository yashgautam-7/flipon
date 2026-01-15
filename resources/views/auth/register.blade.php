@extends('user.layout')
@php($step = 1)
@section('title','Register')
@section('content')


<h4>Create your account</h4>
<p>Enter your email to get started.</p>
                <form action="{{route('userregister')}}"  method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">User Name</label>
                        <input type="text" name="name" placeholder="Enter User Name" /> </br>
                    </div> 

                    <div class="mb-3">
                        <label for="">User Mail</label>
                        <input type="email" name="email" placeholder="Enter User Mail" / ></br>
                    </div>

                     <div class="mb-3">
                    <label for="">User Contact Number</label>
                    <input type="text" name="phone" placeholder="Enter User Number" / ></br>
                    </div>

                     <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password" placholder="Enter Password" / ></br>
                    </div>

                       <div class="mb-3">  
                    <label for="">Confirm Password</label>
                    <input type="password" name="password_confirmation" placholder="Confirm Password" / ></br></br>
                    </div>

                    <button type="submit"  class="btn btn-primary w-100"> Create Account </button>
                </form>
@endsection

@section('side')
<h5>Reshape buying for your organisation</h5>

<ul class="mt-3">
    <li>Free delivery on first order</li>
    <li>GST invoice & bulk discounts</li>
    <li>Business analytics</li>
</ul>
@endsection