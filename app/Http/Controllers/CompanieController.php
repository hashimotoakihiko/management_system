<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companie;
use App\Models\Product;
use App\Http\Requests\CompanieRequest;
use Illuminate\Support\Facades\View;


class CompanieController extends Controller
{
    /**
     * 一覧を表示する
     * 
     * @return view
     */

    public function __construct()
    {
        $this->companie = new Companie();
    }

    public function showList()
    {
        $companies = Companie::all();

        return view ('product_list',
        ['companies' => $companies]);

      
    }

    public function search(Request $request)
    {

         /* テーブルから全てのレコードを取得する */
        $companies = Companie::query();

        /* キーワードから検索処理 */
        $keyword = $request->input('keyword');

        if(!empty($keyword)) {//$keywordが空ではない場合、検索処理を実行します
            // $products->where('company_id', 'LIKE', "%{$keyword}%")
            // ->orwhereHas('products', function ($query) use ($keyword) {
            //     $query->where('product_name', 'LIKE', "%{$keyword}%");
            // })->get();
            $companies->where('company_name', 'LIKE', "%{$keyword}%")
            // ->orwhere('company_name', 'LIKE', "%{$keyword}%")
            ->get();
        }
        
        
        /* ページネーション */
        $companies = $companies->paginate(20);

        return view('product_list', ['companies' => $companies ]);
        // return view('product_list', compact('companies'));
        // return redirect()->route('productshowList');

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
    

    

   
}