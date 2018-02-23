<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
	
	public function front(){
		
		$category = \App\Category::all();
		$menu = \App\Menu::where('menu_name', 'main_menu')->get();
		$products = \App\Product::join('nodes', 'nodes.nid', 'products.nid')->select('products.*', 'nodes.title')->get();
		$options = \App\ProductOption::all();
		return view('home', compact('category', 'menu', 'products', 'options'));
	}
}
