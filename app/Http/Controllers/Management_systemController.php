<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Management_systemController extends Controller
{
    /**
     * ブログ一覧を表示する
     * 
     * @return view
     */

    public function showList()
    {
        return view('management_system.list');
    }
}
