<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = "Welcome to my laravel 8";
        $description = "Created by Khai";
        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung',
        ];
        
        // compact method
        // return view('products.index', compact('title', 'description'));

        // with method
        // return view('products.index')->with('data', $data);

        // directly in the view
        return view('products.index', [
            'title' => $title,
            'data' => $data
        ]);
    }

    public function about() {
        return "About us page";
    }
}