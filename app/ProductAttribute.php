<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $table = 'product_attributes';
    public $timestamps = false;
    
    public static function getAllAttribute()
    {
        return self::paginate(10);
    }
    
    public static function getAttributeById($id)
    {
        return self::where('aid', '=', $id)->get();
    }
    
    public static function createAttribute($data)
    {
        $attribute = new \App\ProductAttribute;
        $attribute->name = $data['title'];
        $attribute->description = $data['description'];
        return $attribute->save();
    }
    
    public static function editAttribute($data)
    {
        return self::where('aid', $data['aid'])->update(['name' => $data['title'], 'description' => $data['description']]);
    }
    
    public static function deleteAttribute($id)
    {
        return self::where('aid','=', $id)->delete();
    }
}
