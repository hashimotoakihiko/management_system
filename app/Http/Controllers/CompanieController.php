<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\LoginFormRequest;
use App\Models\Companie;
use App\Http\Requests\CompanieRequest;

class CompanieController extends Controller
{
    
    /**
     * 一覧を表示する
     * 
     * @return view
     */

    public function showList()
    {
        $companies = Companie::all();

        //dd($companies);

        return view ('product_list',
        ['companies' => $companies]);
    }

    

   
}

