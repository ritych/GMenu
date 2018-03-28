<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductOption;

class HomeController extends Controller
{
    public function front(){
        $products = Product::getAllProductCount(9);
        $options = ProductOption::getAllOptionWithAttribute();
        return view('home', compact('products', 'options'));
    }
}
