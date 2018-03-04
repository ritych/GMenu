<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    
    protected $table = 'menus';
    public $timestamps = false;
    
    public static function getAllMenu()
    {
        return self::paginate(10);
    }
    
    public static function getMenuById($id)
    {
        return self::where('mid','=', $id)->get();
    }
    
    public static function createMenu($data)
    {
        $menu = new \App\Menu;
        $menu->title = $data['title'];
        $menu->description = $data['description'];
        $menu->parent = 0;
        $menu->weight = 0;
        $menu->url = $data['url'];
        $menu->menu_name = $data['menu_name'];
        return $menu->save();
    }
    
    public static function editMenu($data)
    {
        return self::where('mid', $data['mid'])->update(['title' => $data['title'], 'description' => $data['description'], 'url' => $data['url'], 'menu_name' => $data['menu_name']]);
    }
    
    public static function deleteMenu($id)
    {
        return self::where('mid','=', $id)->delete();
    }
}
