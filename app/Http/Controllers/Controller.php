<?php

namespace App\Http\Controllers;

use App\Products;
use View;
use App\Categories;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        // Fetch the Site Settings object
        $cate = new Categories();
        $product = new Products();
        $site_menus = Categories::all()->sortBy('name');
        $cates_high = Categories::limit(3)->orderBy('name','asc')->get();
        $products_high = $product->productHigh()->limit(7)->orderBy('updated_at','asc')->get();
        $products_bestseller = $product->productBestSeller()->limit(7)->get();
        View::share('site_menus', $site_menus);
        View::share('cate_menus', $cate);
        View::share('cates_high', $cates_high);
        View::share('products_high', $products_high);
        View::share('products_bestseller', $products_bestseller);
    }
}
