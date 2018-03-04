<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function allmenus()
    {
        $menus= Menu::getAllMenu();
        return view('admin.menus.menu', compact('menus'));
    }
    
    public function createmenu()
    {
        return view('admin.menus.menu_create');
    }
    
    public function createmenu_submit(Request $request)
    {
        $data = $request->validate([
           'title' => 'required|max:255',
           'url' => 'required|max:255',
           'menu_name' => 'required|max:255',
           'description' => 'required|max:255',
        ]);
        Menu::createMenu($data);
        return redirect('/admin/menus')->with('message', 'Пункт меню создан!');
    }
    
    public function editmenu($id)
    {
        $menu = Menu::getMenuById($id);
        return view('admin.menus.menu_edit', compact('menu', 'id'));
    }
    
    public function editmenu_submit(Request $request)
    {
        $data = $request->validate([
           'title' => 'required|max:255',
           'url' => 'required|max:255',
           'menu_name' => 'required|max:255',
           'description' => 'required|max:255',
           'mid' => 'required',
        ]);
        Menu::editMenu($data);
        return redirect('/admin/menus')->with('message', 'Пункт меню изменен!');
    }
    
    public function deletemenu($id)
    {
        Menu::deleteMenu($id);
        return redirect('/admin/menus')->with('message', 'Пункт меню удален!');
    }
    
}
