<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shipment/{type}', 'App\Http\Controllers\ShipmentsController@shipment');
