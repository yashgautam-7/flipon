<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function storeUser(Request $request){
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email|unique:users',
            'phone' => 'required|max:10',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' =>$request->email,
            'phone'=> $request->phone,
            'password'=>Hash::make($request->password),
            'role'=>'user',
        ]);

        Auth::login($user);
      

        return redirect()->route('address');
    }
     public function logUser(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email',
            'password' =>'required',
        ]);

        if(Auth::attempt($credentials)){
            $request ->session()->regenerate();

            return redirect('dashboard');
        }

        return back()->withErrors([
            'email'=>'Invalid Email or Password',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('dashboard');
}

   
}