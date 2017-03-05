<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    protected $table = 'products';
    protected $fillable = [
        'name',
        'alias',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'image_6',
        'description',
        'code',
        'highlight',
        'bestseller',
        'category_id'
    ];

    public function productHigh(){
        $product = Products::where('highlight',1);
        return $product;
    }
    public function productBestSeller(){
        $product = Products::where('bestseller',1);
        return $product;
    }
    public function productRelated($id, $cate_id){
        $products = Products::leftJoin('categories','products.category_id', '=' , 'categories.id')
            ->where('products.category_id',$cate_id)
            ->whereNotIn('products.id',[$id])
            ->select('products.alias','products.id','products.name','products.image_1','products.category_id','products.highlight','products.bestseller')
            ->get();
        return $products;
    }
}
