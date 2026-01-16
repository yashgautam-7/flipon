<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AddressController;

Route::redirect('/','login');

Route::middleware('auth')->group(function(){
    Route::get('dashboard',fn () => view('welcome'));
Route::get('address', fn() => view('address.create'))->name('address');
    
});

Route::get('login',fn()=> view('auth.login'))->name('login');
Route::get('register', fn () => view('auth.register'));
Route::post('register',[AuthController::class , 'storeUser'])->name('userregister');
Route::post('login',[AuthController::class , 'logUser'])->name('userlogin');


Route::post('address',[AddressController::class, 'store'])->name('storeaddress');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
