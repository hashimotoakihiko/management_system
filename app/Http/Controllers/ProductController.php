<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
// use Illuminate\Support\Facades\View;

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
        // $products = Product::all();
        // $products = Product::where('id',1)->first();
        // $products = Product::find(1);
        $products = Product::get();

    //    dd($products);

        return view ('product_list',
        ['products' => $products]);
      
    }
    

    public function index(Request $request)
    {

         /* テーブルから全てのレコードを取得する */
        $products = Product::query();
        // dd($products);


        /* キーワードから検索処理 */
        $keyword = $request->input('keyword');
        if(!empty($keyword)) {//$keyword　が空ではない場合、検索処理を実行します
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


    
    // public function index(Request $request)
    // {
    //     $keyword = $request->input('keyword');

    //     $query = Product::query();

    //     if(!empty($keyword)) {
    //         $query->where('id', 'LIKE', "%{$keyword}%")
    //             ->orWhere('product_name', 'LIKE', "%{$keyword}%");
    //     }

    //     $products = $query->get();

    //     return view('product.index', compact('products', 'keyword'));
    // }

    // public function create()
    // {
    //     return view('product.create');
    // }

    // public function store(Request $request)
    // {
    //     $product = new Product();
    //     $product->id = $request->id;
    //     $product->company_id = $request->company_id;
    //     $product->product_name = $request->product_name;
    //     $product->price = $request->price;
    //     $product->stock = $request->stock;
    //     $product->comment = $request->comment;
    //     $products->save();
    //     return back();
    // }

    // //ここまで追加
    // public function show(Product $product)
    // {
    //     return view('product.show',compact('product'));
    // }




    // public function getIndex(Request $rq)
    // {
    //     //キーワード受け取り
    //     $products = $rq->input('keyword');
    
    //     //クエリ生成
    //     $query = \App\Product::query();
    
    //     //もしキーワードがあったら
    //     if(!empty($products))
    //     {
    //         $query->where('email','like','%'.$products.'%');
    //         $query->orWhere('name','like','%'.$products.'%');
    //     }
    
    //     // 全件取得 +ページネーション
    //     $students = $query->orderBy('id','desc')->paginate(5);
    //     return view('student.list')->with('students',$students)->with('keyword',$products);
    // }
    
}