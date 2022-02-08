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

        // return view('user_login',
        // ['users' => $users]);

        return view('user_login',
        ['users' => $users]);
        
    }

    // public function Login()
    // {
    //     return view ('product_information_list');
    // }

    

    
    
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
