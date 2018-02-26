<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	
	public function index(){
		return view('home');
	}
//*******************	
	public function allpages(){
		$pages= \App\Node::where('type', '=', 'page')->paginate(20);
		return view('admin.pages', compact('pages'));
	}
//*******************	
	public function content(){
		$pages= \App\Node::paginate(20);
		return view('admin.content', compact('pages'));
	}
//*******************	
	public function allproducts(){
		$products= \App\Node::where('type', '=', 'product')->paginate(20);
		return view('admin.products', compact('products'));
	}
//*******************	
	public function allmenus(){
		$menus= \App\Menu::all();
		return view('admin.menu', compact('menus'));
	}
//*******************	
	public function alloptions(){
		$options= \App\ProductOption::join('product_attributes', 'product_options.aid', 'product_attributes.aid')->select('product_options.*', 'product_attributes.name as aname')->get();;
		return view('admin.options', compact('options'));
	}
//*******************	
	public function allattributes(){
		$attributes= \App\ProductAttribute::all();
		return view('admin.attributes', compact('attributes'));
	}
	
	public function createattributes(){
		return view('admin.attributes_create');
	}
	
	public function createattributes_submit(Request $request){
		$data = $request->validate([
			'title' => 'required|max:255',
			'description' => 'max:255',
		]);
		
		$attr = new \App\ProductAttribute;
		$attr->name = $data['title'];
		$attr->description = $data['description'];
		$attr->save();
		
		return redirect('/admin/attributes')->with('message', 'Атрибут создан!');
	}
	
	public function editattributes($id){
		$attribute= \App\ProductAttribute::where('aid','=', $id)->get();
		return view('admin.attributes_edit', compact('attribute', 'id'));
	}
	
	public function editattributes_submit(Request $request){
		$data = $request->validate([
			'title' => 'required|max:255',
			'description' => 'max:255',
			'aid' => 'required',
		]);
		\App\ProductAttribute::where('aid', $data['aid'])->update(['name' => $data['title'], 'description' => $data['description']]);
		return redirect('/admin/attributes')->with('message', 'Атрибут сохранен!');
	}
	
	public function deleteattributes($id){
		\App\ProductAttribute::where('aid','=', $id)->delete();
		return redirect('/admin/attributes')->with('message', 'Атрибут удален!');
	}
	
}
