<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\View;


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


    public function product_edit()
    {
        return view ('product_edit');
    }


    public function productshowList()
    {   
        $this->Product = new Product();

        $products = $this->Product->getList();
        // $products = Product::get();

        return view ('product_list',
        ['products' => $products]);
    }
    

    public function index(Request $request)
    {

         /* テーブルから全てのレコードを取得する */
        $products = Product::query();

        /* キーワードから検索処理 */
        $keyword = $request->input('keyword');
        if(!empty($keyword)) {//$keywordが空ではない場合、検索処理を実行します
            // $products->where('company_id', 'LIKE', "%{$keyword}%")
            // ->orwhereHas('products', function ($query) use ($keyword) {
            //     $query->where('product_name', 'LIKE', "%{$keyword}%");
            // })->get();
            $products->where('product_name', 'LIKE', "%{$keyword}%")->get();
        }

        /* ページネーション */
        $products = $products->paginate(5);

        return view('product_list', ['products' => $products]);

    }


    public function product_details()
    {
        $this->Product = new Product();

        $products = $this->Product->getDetail();
        // $products = Product::get();
        
        return view ('product_details',
        ['products' => $products]);
    }

    // public function getDetail(Request $request)
    // {

    //      /* テーブルから全てのレコードを取得する */
    //     $products = Product::query();

    //     /* キーワードから検索処理 */
    //     $keyword = $request->input('keyword');
    //     if(!empty($keyword)) {//$keywordが空ではない場合、検索処理を実行します
    //         // $products->where('company_id', 'LIKE', "%{$keyword}%")
    //         // ->orwhereHas('products', function ($query) use ($keyword) {
    //         //     $query->where('product_name', 'LIKE', "%{$keyword}%");
    //         // })->get();
    //         $products->where('product_name', 'LIKE', "%{$keyword}%")->get();
    //     }

    //     /* ページネーション */
    //     $products = $products->paginate(5);

    //     return view('product_details', ['products' => $products]);

    // }


    /**
     * 削除処理
     */
    public function destroy($id)
    {
        // Booksテーブルから指定のIDのレコード1件を取得
        $products = Product::find($id);
        // レコードを削除
        $products->delete();
        // dd($products);

        // 削除したら一覧画面にリダイレクト
        // return redirect()->route('product_list', ['products' => $products]);
        return redirect()->to('product_list');
    }
}

    
