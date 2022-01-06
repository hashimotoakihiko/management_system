<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Management_system;
use App\Http\Requests\Management_systemRequest;

class Management_systemController extends Controller
{
    /**
     * ブログ一覧を表示する
     * 
     * @return view
     */

    public function showList()
    {
        return view('Management_system.product_information_list');
    }
}
