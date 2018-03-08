<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function allpages()
    {
        $pages = Page::getAllPage();
        return view('admin.pages.pages', compact('pages'));
    }

    public function createpage()
    {
        return view('admin.page.page_create');
    }

    public function createpage_submit(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'url' => 'required|max:255',
            'menu_name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        Page::createPage($data);
        return redirect('/admin/pages')->with('message', 'Страница создана!');
    }

    public function editmenu($id)
    {
        $menu = Menu::getMenuById($id);
        return view('admin.pages.pages_edit', compact('menu', 'id'));
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
        return redirect('/admin/pages')->with('message', 'Страница изменена!');
    }

    public function deletemenu($id)
    {
        Menu::deleteMenu($id);
        return redirect('/admin/pages')->with('message', 'Страница удалена!');
    }
}
