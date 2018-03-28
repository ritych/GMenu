<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;

    public static function getAllProduct()
    {
        return self::join('nodes', 'nodes.nid', 'products.nid')->select('products.*', 'nodes.title')->get();
    }

    public static function getAllProductCount($count)
    {
        return self::join('nodes', 'nodes.nid', 'products.nid')->select('products.*', 'nodes.title')->paginate($count);
    }

    public static function getProductById($id)
    {
        return self::where('nid','=', $id)->get();
    }
}
