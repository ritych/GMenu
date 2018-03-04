<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductAttribute;

class AttributeController extends Controller
{
    public function allattributes()
    {
        $attributes= ProductAttribute::getAllAttribute();
        return view('admin.attributes.attributes', compact('attributes'));
    }
    
    public function createattributes()
    {
        return view('admin.attributes.attributes_create');
    }
    
    public function createattributes_submit(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'max:255',
        ]);
        ProductAttribute::createAttribute($data);
        return redirect('/admin/attributes')->with('message', 'Атрибут создан!');
    }
    
    public function editattributes($id)
    {
        $attribute= ProductAttribute::getAttributeById($id);
        return view('admin.attributes.attributes_edit', compact('attribute', 'id'));
    }
    
    public function editattributes_submit(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'max:255',
            'aid' => 'required',
        ]);
        ProductAttribute::editAttribute($data);
        return redirect('/admin/attributes')->with('message', 'Атрибут сохранен!');
    }
    
    public function deleteattributes($id)
    {
        ProductAttribute::deleteAttribute($id);
        return redirect('/admin/attributes')->with('message', 'Атрибут удален!');
    }
}
