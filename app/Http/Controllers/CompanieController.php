<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\LoginFormRequest;
use App\Models\Companie;
use App\Http\Requests\CompanieRequest;

class CompanieController extends Controller
{
    
    /**
     * ブログ一覧を表示する
     * 
     * @return view
     */

    public function Login()
    {
        return view ('product_information_list');
    }

    public function new_registration()
    {
        return view ('product_information_new_registration');
    }
}

