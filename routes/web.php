<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/discount', function () {
   return view('discount');
});

Route::post('/display-discount', function (Illuminate\Http\Request $request) {
   $productDescription = $request->desc;
   $price = $request->price;
   $discountPercent = $request->percent;
   $discountAmount = $price * $discountPercent /100;
   $discountPrice = $price - $discountAmount;
    return view('display-discount', compact(['discountPrice', 'discountAmount',
        'productDescription', 'price', 'discountPercent']));
});
