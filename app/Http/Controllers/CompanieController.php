<?php

namespace App\Http\Controllers;
// use Illuminate\Http\Request\LoginFormRequest;
use Illuminate\Http\Request;
use App\Models\Companie;
use App\Http\Requests\CompanieRequest;

class CompanieController extends Controller
{
    /**
     * 一覧を表示する
     * 
     * @return view
     */

    // public function showList()
    // {
    //     $companies = Companie::all();

    //    // dd($companies);

    //     return view ('product_list',
    //     ['companies' => $companies]);

      
    // }

    // public function search()
    // {
    //     $companies = Companie::where('id',1)->first();
    //     // $data = ['msg' => '商品一覧', 'companies' => $companies];

    //     //dd($companies);

    //     // return view('product_list', $data);

    //     return view ('product_list',
    //     ['companies' => $companies]);
    // }
    
    // public function indexC()
    // {
    //     $companies = Companie::find(auth()->id());
    //     $companies->products = $companies->products()->orderByDesc('created_at')->paginate(5);
    //     return view('dashboard', ['companies' => $companies]);
    // }
    

    

   
}

