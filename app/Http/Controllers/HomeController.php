<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function front(){
        $products = \App\Product::join('nodes', 'nodes.nid', 'products.nid')->select('products.*', 'nodes.title')->get();
        $options = \App\ProductOption::all();
        return view('home', compact('products', 'options'));
    }
}
