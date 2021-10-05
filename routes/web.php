<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

// Route that send back a view
Route::get('/', function () {
    return view('home');
});

// Route to users - string
Route::get('/users', function () {
    return "Hello";
});

// Route to users - array [Json]
Route::get('/users', function () {
    return ['PHP', 'Htmls', 'Laravel'];
});

// Route to users - JSON object
Route::get('/users', function () {
    return response()->json([
            'name' => 'Khailq',
        'course' => 'Laravel Beginer',
    ]);
});

// Route to users - function
Route::get('/users', function () {
    return redirect('/');
});

// route controller
// Laravel 8 (New)
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/about', [ProductsController::class, 'about']);
// Laravel 8 (Also New)
Route::get('/products', 'App\Http\Controllers\ProductsController@index');
// Before Laravel 8 (not working)
// Route::get('/products', 'ProductsController@index');


// ROUTE PARAMETERS
// /products = all products
// /products/productName
// /products/id

// Route::get('products/{name}', [ProductsController::class, 'show']);

// Pattern is integer
// [0-9] : 0 to 9
// [0-9]+
// Route::get('products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+');

// Pattern is string
Route::get('products/{name}', [ProductsController::class, 'show'])->where('name', '[a-zA-z]+');