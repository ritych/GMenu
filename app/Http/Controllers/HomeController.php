<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	
	public function front(){
		$category = \App\Category::all();
		$menu = \App\Menu::where('menu_name', 'main_menu')->get();
		$products = \App\Product::all();
		return view('home', compact('category', 'menu', 'products'));
	}
}
