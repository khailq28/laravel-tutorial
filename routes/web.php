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