<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    
	public function catalog($id){
		$products = \App\Product::join('nodes', 'nodes.nid', 'products.nid')->select('products.*', 'nodes.title')->where('products.category', '=', $id)->get();
		$options = \App\ProductOption::all();
		return view('home', compact('products', 'options'));
	}
}
