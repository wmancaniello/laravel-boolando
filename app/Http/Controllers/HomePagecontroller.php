<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePagecontroller extends Controller
{
    public function index() {
        $products = config("products.products");
        return view('home', compact('products'));
    }
}
