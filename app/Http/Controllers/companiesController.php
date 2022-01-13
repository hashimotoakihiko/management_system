<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
use App\Http\Requests\UserRequest;

class companiesController extends Controller
{
    
    /**
     * ブログ一覧を表示する
     * 
     * @return view
     */

    public function showList ()
    {
        return view("product_information_list");
    }
}
