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
		return view('admin.pages.pages', compact('pages'));
	}
//*******************	
	public function content(){
		$pages= \App\Node::paginate(20);
		return view('admin.content', compact('pages'));
	}
//*******************	
	public function allproducts(){
		$products= \App\Node::where('type', '=', 'product')->paginate(20);
		return view('admin.products.products', compact('products'));
	}
//*******************	
	public function allmenus(){
		$menus= \App\Menu::all();
		return view('admin.menus.menu', compact('menus'));
	}
	
	public function createmenu(){
		return view('admin.menus.menu_create');
	}
	
	public function createmenu_submit(Request $request){
		$data = $request->validate([
			'title' => 'required|max:255',
			'url' => 'required|max:255',
			'menu_name' => 'required|max:255',	
			'description' => 'required|max:255',	
		]);
		
		$menu = new \App\Menu;
		$menu->title = $data['title'];
		$menu->url = $data['url'];
		$menu->menu_name = $data['menu_name'];
		$menu->description = $data['description'];
		$menu->parent = '0';
		$menu->weight = '0';
		$menu->save();
		
		return redirect('/admin/menus')->with('message', 'Пункт меню создан!');
	}
	
	public function editmenu($id){
		$menu= \App\Menu::where('mid', $id)->get();
		return view('admin.menus.menu_edit', compact('menu', 'id'));
	}
	
	public function editmenu_submit(Request $request){
		$data = $request->validate([
			'title' => 'required|max:255',
			'url' => 'required|max:255',
			'menu_name' => 'required|max:255',	
			'description' => 'required|max:255',
			'mid' => 'required',
		]);
		
		\App\Menu::where('mid', $data['mid'])->update(['title' => $data['title'], 'url' => $data['url'], 'menu_name' => $data['menu_name'], 'description' => $data['description']]);
		return redirect('/admin/menus')->with('message', 'Пункт меню изменен!');
	}
	
	public function deletemenu($id){
		\App\Menu::where('mid','=', $id)->delete();
		return redirect('/admin/menus')->with('message', 'Пункт меню удален!');
	}
	
//***********Options********	
	public function alloptions(){
		$options= \App\ProductOption::join('product_attributes', 'product_options.aid', 'product_attributes.aid')->select('product_options.*', 'product_attributes.name as aname')->orderBy('aid')->paginate(20);
		return view('admin.options.options', compact('options'));
	}
	
	public function createoptions(){
		$attributes= \App\ProductAttribute::all();
		return view('admin.options.option_create', compact('attributes'));
	}
	
	public function createoptions_submit(Request $request){
		$data = $request->validate([
			'title' => 'required|max:255',
			'attr' => 'required',
		]);
		
		$option = new \App\ProductOption;
		$option->name = $data['title'];
		$option->aid = $data['attr'];
		$option->save();
		
		return redirect('/admin/options')->with('message', 'Опция создана!');
	}
	
	public function editoptions($id){
		$option= \App\ProductOption::where('oid','=', $id)->get();
		return view('admin.options.options_edit', compact('option', 'id'));
	}
	
	public function editoptions_submit(Request $request){
		$data = $request->validate([
			'title' => 'required|max:255',
			'attr' => '',
			'oid' => 'required',
		]);
		
		\App\ProductOption::where('oid', $data['oid'])->update(['name' => $data['title']]);
		return redirect('/admin/options')->with('message', 'Атрибут изменен!');
	}
	
	public function deleteoptions($id){
		\App\ProductOption::where('oid','=', $id)->delete();
		return redirect('/admin/options')->with('message', 'Опция удалена!');
	}
//***********Atributes********	
	public function allattributes(){
		$attributes= \App\ProductAttribute::paginate(20);
		return view('admin.attributes.attributes', compact('attributes'));
	}
	
	public function createattributes(){
		return view('admin.attributes.attributes_create');
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
		return view('admin.attributes.attributes_edit', compact('attribute', 'id'));
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
	

//***********Categories********	
	public function allcategories(){
		$categories= \App\Category::paginate(20);
		return view('admin.categories.categories', compact('categories'));
	}
	
	public function createcategory(){
		return view('admin.categories.category_create');
	}
	
	public function createcategory_submit(Request $request){
		$data = $request->validate([
			'title' => 'required|max:255',
			'parent' => 'required|max:255',
			'weight' => 'required|max:255',
			'description' => 'max:255',
		]);
		
		$category = new \App\Category;
		$category->title = $data['title'];
		$category->description = $data['description'];
		$category->parent = $data['parent'];
		$category->weight = $data['weight'];
		$category->save();
		
		return redirect('/admin/categories')->with('message', 'Категория создана!');
	}
	
	public function editcategory($id){
		$category= \App\Category::where('cid','=', $id)->get();
		return view('admin.categories.category_edit', compact('category', 'id'));
	}
	
	public function editcategory_submit(Request $request){
		$data = $request->validate([
			'title' => 'required|max:255',
			'parent' => 'required|max:255',
			'weight' => 'required|max:255',
			'description' => 'max:255',
			'cid' => 'required',
		]);
		\App\Category::where('cid', $data['cid'])->update(['title' => $data['title'], 'description' => $data['description'], 'parent' => $data['parent'], 'weight' => $data['weight']]);
		return redirect('/admin/categories')->with('message', 'Категория изменена!');
	}
	
	public function deletecategory($id){
		\App\Category::where('cid','=', $id)->delete();
		return redirect('/admin/categories')->with('message', 'Категория удалена!');
	}
	
}

