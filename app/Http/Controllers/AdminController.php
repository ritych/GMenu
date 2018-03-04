<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        return view('home');
    }
//*******************
    public function allpages()
    {
        $pages= \App\Node::where('type', '=', 'page')->paginate(20);
        return view('admin.pages.pages', compact('pages'));
    }
//*******************
    public function content()
    {
        $pages= \App\Node::paginate(20);
        return view('admin.content', compact('pages'));
    }
//*******************
    public function allproducts()
    {
        $products= \App\Node::where('type', '=', 'product')->paginate(20);
        return view('admin.products.products', compact('products'));
    }
}
