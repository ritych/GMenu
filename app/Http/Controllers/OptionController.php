<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductOption;
use App\ProductAttribute;

class OptionController extends Controller
{
    public function alloptions()
    {
        $options = ProductOption::getAllOptionWithAttribute();
        return view('admin.options.options', compact('options'));
    }
    
    public function createoptions()
    {
        $attributes = ProductAttribute::getAllAttribute();
        return view('admin.options.option_create', compact('attributes'));
    }
    
    public function createoptions_submit(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'attr' => 'required',
        ]);
        ProductOption::createOption($data);
        return redirect('/admin/options')->with('message', 'Опция создана!');
    }
    
    public function editoptions($id)
    {
        $option = ProductOption::getOptionById($id);
        return view('admin.options.options_edit', compact('option', 'id'));
    }
    
    public function editoptions_submit(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'attr' => '',
            'oid' => 'required',
        ]);
        ProductOption::editOption($data);
        return redirect('/admin/options')->with('message', 'Атрибут изменен!');
    }
    
    public function deleteoptions($id)
    {
        ProductOption::deleteOption($id);
        return redirect('/admin/options')->with('message', 'Опция удалена!');
    }
}
