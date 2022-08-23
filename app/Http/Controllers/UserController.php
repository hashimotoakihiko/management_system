<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
//use Illuminate\Http\Request\LoginFormRequest;

// use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * トップページを表示する
     * 
     * @return view
     */

    public function showLogin ()
    {
        $users = User::all();
        
        //dd($users);

        return view('login',
        ['users' => $users]);
        
    }

    public function new()
    {
        return view ('registration');
    }


    
}
