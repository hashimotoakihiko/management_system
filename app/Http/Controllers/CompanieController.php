<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companie;
use App\Http\Requests\CompanieRequest;

class CompanieController extends Controller
{
    
    /**
     * ブログ一覧を表示する
     * 
     * @return view
     */

    public function uploaded ()
    {
        return view("product_information_list");
    }
}
