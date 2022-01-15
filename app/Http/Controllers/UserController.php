<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * ブログ一覧を表示する
     * 
     * @return view
     */

    public function showList ()
    {
        return view("user_login");
    }
}
