<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $products = config('products.products');
    return view('home', compact('products'));
})->name('home');

Route::get('/prodotti-donna', function () {
    $products = config('products.products');
    return view('productsWoman', compact('products'));
})->name('productsWoman');

Route::get('/prodotti-uomo', function () {
    $products = config('products.products');
    return view('productsMan', compact('products'));
})->name('productsMan');

Route::get('/chi-siamo', function () {
    return view('about');
})->name('about');



Route::get('/dettaglio-prodotto/{slug}', function ($slug) {

    $products = config('products.products');

    $product_array = array_filter($products, fn($item) => $item['slug'] === $slug);

    $item = $product_array[array_key_first($product_array)];


    return view('productDetail', compact('item'));
})->name('productDetail');
