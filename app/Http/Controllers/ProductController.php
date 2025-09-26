<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Companie;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\View;


class ProductController extends Controller
{
     /**
     * 一覧を表示する
     * 
     * @return view
     */

    public function __construct()
    {
        $this->product = new Product();
    }

    public function productshowList()
    { 
        $this->Product = new Product();
        $this->Companie = new Companie();

        $products = $this->Product->getList();
        $companies = $this->Companie->getsearch();
        
        return view ('product_list',
        ['products' => $products],['companies' => $companies]);
    }

    public function index(Request $request)
    {

         /* テーブルから全てのレコードを取得する */
        $products = Product::query();
        // $this->Companie = new Companie();
        // $companies = Companie::query();
        $companies = Companie::getsearch(); // Companieモデルのgetsearch()メソッドを呼び出す

        /* キーワードから検索処理 */
        $keyword = $request->input('keyword');
        // $companies = $this->Companie->getsearch();


        // if(!empty($keyword)) {//$keywordが空ではない場合、検索処理を実行します
        //     // $products->where('company_id', 'LIKE', "%{$keyword}%")
        //     // ->orwhereHas('products', function ($query) use ($keyword) {
        //     //     $query->where('product_name', 'LIKE', "%{$keyword}%");
        //     // })->get();
        //     $products->where('product_name', 'LIKE', "%{$keyword}%");
        //     // ->orwhere('company_name', 'LIKE', "%{$keyword}%")
            
        // }

        if (!empty($keyword)) {
            $products->where('product_name', 'LIKE', "%{$keyword}%");
        }

        $company_id = $request->input('company_id');
        // dd($company_id);

        // if(!empty($company_id)) {//$keywordが空ではない場合、検索処理を実行します
        //     // $products->where('company_id', 'LIKE', "%{$keyword}%")
        //     // ->orwhereHas('products', function ($query) use ($keyword) {
        //     //     $query->where('product_name', 'LIKE', "%{$keyword}%");
        //     // })->get();
        //     $products->where('company_id', '=', $company_id);
            
        //     // $company_id->where('company_id' , 'company_id')

        //     // ->orwhere('company_name', 'LIKE', "%{$keyword}%")
            
        // }

        if (!empty($company_id)) {
            $products->where('company_id', '=', $company_id);
        }
        
        /* ページネーション */
        $products = $products->paginate(20);

        return view('product_list', [
            'products' => $products,
            'companies' => $companies
        ]);

    }

    // public function select($keyword) {
    //     // Productテーブルからデータを取得
    //     $products = DB::table('products')
    //         ->join('companies', 'company_id', '=', 'companies.id')
    //         ->select('products.*', 'companies.company_name')
    //         ->where('products.product_name', 'like',"%$keyword%" )
    //         ->get();
    
    //     return view('product_list', compact('companies'));
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
        
        return redirect()->route('productshowList');
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

    /**
     * 削除処理
     */
    public function destroy($id)
    {
        // Booksテーブルから指定のIDのレコード1件を取得
        $products = Product::find($id);
        // レコードを削除
        $products->delete();

        // 削除したら一覧画面にリダイレクト
        // return redirect()->route('product_list', ['products' => $products]);
        return redirect()->to('product_list');
    }

    // public function upload(Request $request)
    // {
    //     // ディレクトリ名
    //     $dir = 'sample';

    //     // sampleディレクトリに画像を保存
    //     $request->file('image')->store('public/' . $dir);

    //     return redirect('/');
    // }

    // public function upload(Request $request)
    // {
    // // ディレクトリ名を指定
    // $dir = 'images';

    // // 画像がアップロードされた場合
    // if ($request->file('image')) {
    //     // 画像を保存して、そのパスを取得
    //     $path = $request->file('image')->store('public/' . $dir);

    //     // データベースに保存するため、ファイルパスから「public/」を取り除く
    //     $filename = str_replace('public/', '', $path);

    //     // 商品のデータを更新（または作成）する
    //     $product = Product::find($request->id);
    //     $product->image_path = $filename;
    //     $product->save();

    //     // リダイレクト
    //     return redirect()->route('productshowList');
    // }
    // // 画像がアップロードされていない場合は、エラーメッセージを返す
    // return redirect()->back()->withErrors(['image' => '画像がアップロードされていません。']);
    // }

    // public function upload(Request $request)
    // {
    //     // 画像がアップロードされたか確認
    //     if ($request->hasFile('image')) {
    //         // 画像をstorageディレクトリに保存し、パスを取得
    //         $path = $request->file('image')->store('public/images');

    //         // パスから「public/」を削除してファイルパスを取得
    //         $filename = str_replace('public/', '', $path);

    //         // 商品のデータを取得し、画像パスを更新
    //         $product = Product::find($request->id);
    //         $product->image_path = $filename;
    //         $product->save();

    //         return redirect()->route('productshowList')->with('success', '画像をアップロードしました。');
    //     }

    //     // エラーメッセージの処理
    //     return redirect()->back()->withErrors(['image' => '画像がアップロードされていません。']);
    // }

    

    // public function upload(Request $request)
    // {
    // // ディレクトリ名を指定
    // $dir = 'images';

    // // 画像がアップロードされた場合
    // if ($request->file('image')) {
    //     // 画像を保存し、パスを取得
    //     $path = $request->file('image')->store('public/' . $dir);

    //     // パスから「public/」を削除してファイルパスを取得
    //     $filename = str_replace('public/', '', $path);

    //     // 商品のデータを取得し、画像パスを更新
    //     $product = Product::find($request->id);
    //     $product->image_path = $filename;
    //     $product->save();

    //     // 成功メッセージと共にリダイレクト
    //     return redirect()->route('productshowList')->with('success', '画像をアップロードしました。');
    // }

    // // エラーメッセージ
    // return redirect()->back()->withErrors(['image' => '画像がアップロードされていません。']);
    // }

    public function upload(Request $request)
    {
        // 画像がアップロードされたか確認
        if ($request->hasFile('image')) {
            // 画像を保存し、パスを取得
            $path = $request->file('image')->store('public/images');

            // パスから「public/」を削除してファイルパスを取得
            $filename = str_replace('public/', '', $path);

            // 該当商品の画像パスを更新
            $product = Product::find($request->id);
            $product->image_path = $filename;
            $product->save();

            return redirect()->route('productshowList')->with('success', '画像をアップロードしました。');
        }

        // エラーメッセージの処理
        return redirect()->back()->withErrors(['image' => '画像がアップロードされていません。']);
    }

}

    
