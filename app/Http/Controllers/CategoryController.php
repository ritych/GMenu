<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    
    public function allcategories()
    {
        $categories=Category::getAllCategory();
        return view('admin.categories.categories', compact('categories'));
    }
    
    public function createcategory()
    {
        return view('admin.categories.category_create');
    }
    
    public function createcategory_submit(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'parent' => 'required|max:255',
            'weight' => 'required|max:255',
            'description' => 'max:255',
        ]);
        Category::createCategory($data);
        return redirect('/admin/categories')->with('message', 'Категория создана!');
    }
    
    public function editcategory($id)
    {
        $category= Category::getCategoryById($id);
        return view('admin.categories.category_edit', compact('category', 'id'));
    }
    
    public function editcategory_submit(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'parent' => 'required|max:255',
            'weight' => 'required|max:255',
            'description' => 'max:255',
            'cid' => 'required',
        ]);
        Category::editCategory($data);
        return redirect('/admin/categories')->with('message', 'Категория изменена!');
    }
    
    public function deletecategory($id)
    {
        Category::deleteCategory($id);
        return redirect('/admin/categories')->with('message', 'Категория удалена!');
    }
}
