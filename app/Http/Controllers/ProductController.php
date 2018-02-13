<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
	public function product_view($id){
		$product=\App\Product::join('nodes', 'nodes.nid', 'products.nid')->select('products.*', 'nodes.title')->where('products.nid', '=', $id)->get();
		return view('product.product_view', compact('product'));
	}
	
	public function product_edit($id){
		return view('product.product_edit');
	}
	
	public function product_delete($id){
		return view('product.product_delete');
	}
	
	public function product_add(){
		return view('product.product_add');
	}
}
