<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntroController;
use App\Models\Inventory;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\KelompokController;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/hello', function(){
    return 'Hello World!';
});

//basic route
Route::get('/salam_pembuka', [IntroController::class, 'salamPembuka']);

// //route with parameter
Route::get('/Product/{id}',[IntroController::class, 'detailProduct']);

// //route with double parameter
Route::get('/Product/id/{product_id}/status/{comment_id}', [IntroController::class, 'detailProductDouble']);

// //route with 2 http method
Route::match(["PUT","GET"], "/product/{id}", [IntroController::class, 'detailProductDouble']);

// //route group
Route::group(["prefix => product"], function(){
    Route::get("/list", [IntroController::class, 'index']);
    Route::get("/orders", [IntroController::class, 'index']);
});

// //route view
Route::view("/path", "product.view");

Route::get('/home', function(){
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function(){
    return view('profile', [
        "title" => "Profile"
    ]);
});

//menampilkan content inventory
//memanggil function index dari controller
Route::get('/inventory',[InventoryController::class, 'index']);

//menampilkan content inventory by link
//memanggil function show dari controller berdasarkan link
Route::get('/inventory/{link}', [InventoryController::class, 'show']);

Route::get('/kelompok', [KelompokController::class, 'index']);

Route::get('/kelompok/{link}', [KelompokController::class, 'show']);


