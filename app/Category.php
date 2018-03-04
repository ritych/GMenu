<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $timestamps = false;
    
    public static function getAllCategory()
    {
        return self::paginate(10);
    }
    
    public static function getCategoryById($id)
    {
        return self::where('cid', '=', $id)->get();
    }
    
    public static function createCategory($data)
    {
        $category = new \App\Category;
        $category->title = $data['title'];
        $category->description = $data['description'];
        $category->parent = $data['parent'];
        $category->weight = $data['weight'];
        return $category->save();
    }
    
    public static function editCategory($data)
    {
        return self::where('cid', $data['cid'])->update(['title' => $data['title'], 'description' => $data['description'], 'parent' => $data['parent'], 'weight' => $data['weight']]);
    }
    
    public static function deleteCategory($id)
    {
        return self::where('cid','=', $id)->delete();
    }
}
