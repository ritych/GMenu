<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'nodes';
    public $timestamps = false;

    public static function getAllPage()
    {
        return self::where('type','=', 'page')->paginate(10);
    }

    public static function getPageById($id)
    {
        return self::where('nid','=', $id)->get();
    }

    public static function createPage($data)
    {
        $page = new \App\Page;
        $page->title = $data['title'];
        $page->description = $data['description'];
        $page->parent = 0;
        $page->weight = 0;
        $page->url = $data['url'];
        $page->menu_name = $data['menu_name'];
        return $page->save();
    }

    public static function editPage($data)
    {
        return self::where('nid', $data['nid'])->update(['title' => $data['title'], 'description' => $data['description'], 'url' => $data['url'], 'menu_name' => $data['menu_name']]);
    }

    public static function deletePage($id)
    {
        return self::where('nid','=', $id)->delete();
    }
}
