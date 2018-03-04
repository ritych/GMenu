<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    protected $table = 'product_options';
    public $timestamps = false;
    
    public static function getAllOptionWithAttribute()
    {
        return self::join('product_attributes', 'product_options.aid', 'product_attributes.aid')->select('product_options.*', 'product_attributes.name as aname')->orderBy('aid')->paginate(20);
    }
    
    public static function getOptionById($id)
    {
        return self::where('oid', '=', $id)->get();
    }
    
    public static function createOption($data)
    {
        $option = new \App\ProductOption;
        $option->name = $data['title'];
        $option->aid = $data['attr'];
        return $option->save();
    }
    
    public static function editOption($data)
    {
        return self::where('oid', $data['oid'])->update(['name' => $data['title']]);
    }
    
    public static function deleteOption($id)
    {
        return self::where('oid','=', $id)->delete();
    }
}
