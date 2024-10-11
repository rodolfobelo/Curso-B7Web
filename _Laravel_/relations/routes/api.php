<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']);    //List Users
Route::post('/users', [UserController::class, 'create']);  //Create User
Route::get('/users/{id}', [UserController::class, 'show']);//List One User

Route::get('/addresses', [AddressController::class, 'index']);     //List Addresses
Route::post('/addresses', [AddressController::class, 'create']);   //Create Address
Route::get('/addresses/{id}', [AddressController::class, 'show']); //List One Address