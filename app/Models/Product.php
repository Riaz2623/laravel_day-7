<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $image;
    private static $directory;
    private static $product;
    private static $imageName;
    private static $imageUrl;

    public static function getImageUrl($request)
    {
       self:: $image  = $request->file('image');
       self:: $imageName  = self::$image->getClientOriginalName();
        self:: $directory= 'product-image/';
        self::$image->move(self::$directory, self::$imageName);
       return  self::$directory.self::$imageName;
    }

    public static function newProduct($request)
    {
        self::$product =new Product();
        self::$product->name    = $request->name;
        self::$product->category   = $request->category;
        self::$product->brand   = $request->brand;
        self::$product->price   = $request->price;
        self::$product->description  = $request->description;
        self::$product->image =self::getImageUrl($request);
        self::$product->save();
    }
    public static function updateProduct($request , $id)
    {
        
    }
}
