<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\LoginFormRequest;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * ブログ一覧を表示する
     * 
     * @return view
     */

    public function showLogin ()
    {
        return view('user_login');
    }
    
    // public function Login()
    // {
    //     return view ('product_information_list');
    // }

    // public function new_registration()
    // {
    //     return view ('product_information_new_registration');
    // }
    

    // public function login(LoginFormRequest $request) 
    // {
    //     dd($request->all());
    // }

    
}
