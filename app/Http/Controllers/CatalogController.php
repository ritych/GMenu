<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    
	public function catalog($id){
		$category = \App\Category::all();
		$menu = \App\Menu::where('menu_name', 'main_menu')->get();
		$products = \App\Product::join('nodes', 'nodes.nid', 'products.nid')->select('products.*', 'nodes.title')->where('products.category', '=', $id)->get();
		$options = \App\ProductOption::all();
		return view('home', compact('category', 'menu', 'products', 'options'));
	}
}
