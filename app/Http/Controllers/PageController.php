<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function allpages(){
        $products = \App\Product::join('nodes', 'nodes.nid', 'products.nid')->select('products.*', 'nodes.title')->get();
        $options = \App\ProductOption::all();
        return view('home', compact('products', 'options'));
    }
    
    
}
