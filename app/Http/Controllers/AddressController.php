<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AddressController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'pincode' => 'required',
            'state' => 'required',

        ]);

        Address::Create([
            'user_id' => Auth::id(),
            'address' => $request->address,
            'city'=> $request->city,
            'state' => $request->state,
            'country' =>$request->country,
            'pincode' => $request->pincode,
            'is_default' =>true,
        ]);

        return redirect('dashboard')->with('Success','Address saved successfully');
    }
}
