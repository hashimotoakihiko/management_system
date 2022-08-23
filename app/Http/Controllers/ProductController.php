<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
     /**
     * 一覧を表示する
     * 
     * @return view
     */

    public function product_new()
    {
        return view ('product_new');
    }

    public function product_details()
    {
        return view ('product_details');
    }

    public function product_edit()
    {
        return view ('product_edit');
    }

    public function productshowList()
    {
        $products = Product::all();

       // dd($companies);

        return view ('product_list',
        ['products' => $products]);
      
    }
    
    public function productsearch()
    {
        $products = Product::where('id',1)->first();
        // $data = ['msg' => '商品一覧', 'products' => $products];

        //dd($companies);

        // return view('product_list', $data);

        return view ('product_list',
        ['products' => $products]);
    }
}
