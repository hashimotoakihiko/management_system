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

    public function productshowList()
    { 
        $this->Product = new Product();

        $products = $this->Product->getList();
        // $products = Product::get();

        return view ('product_list',
        ['products' => $products]);
    }
    
    public function __construct()
    {
        $this->product = new Product();
    }

    // public function productshowList()
    // {
    //     $products = $this->product->findAllProducts();

    //     return view('product_list', compact('products'));
    // }

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

    // public function __construct()
    // {
    //     // $this->products = new Products();
    //     $this->product = new Product();
    //     // $products = $this->Product->getList();
    // }

    /**
     * 登録画面
     */
    public function create(Request $request)
    {
        return view('product_new');
    }

    /**
     * 登録処理
     */
    public function store(Request $request)
    {
        // $this->products = new Products();
        $registerProducts = $this->product->InsertProduct($request);
        return redirect()->route('product_list');
        // return redirect()->to('product_list');

    }

    /**
     * 詳細画面の表示
     */
    public function show($id)
    {
        $products = Product::find($id);
        return view('product_details', compact('products'));
        // return view('product_details');
    }

    /**
     * 編集画面の表示
     */
    public function edit($id)
    {
        $products = Product::find($id);
        return view('product_edit', compact('products'));
        // return view('product_edit');
    }

    /**
     * 更新処理
     */
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $updateProducts = $this->product->updateProduct($request, $products);

        return redirect()->route('productshowList');
    }

    // public function product_details()
    // {
    //     $this->Product = new Product();

    //     $products = $this->Product->getDetail();
    //     $products = Product::get();
        
    //     return view ('product_details',
    //     ['products' => $products]);
    // }

    // public function edit($id)
    // {
    //     $products = Product::find($id);
    //     return view('product_edit', compact('products'));
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

    
