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

    /**
     * ユーザー新規登録処理
     */
    public function store(Request $request)
    {
        // バリデーション（必要に応じて項目を追加）
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // ユーザー作成
        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = bcrypt($validated['password']);
        $user->save();

        // 登録後はログイン画面などへリダイレクト
        return redirect()->route('showLogin')->with('success', 'ユーザー登録が完了しました');
    }
    /**
     * ログイン処理（仮実装）
     */
    public function login(Request $request)
    {
        // 本来は認証処理を書く
        // ここでは仮に商品一覧へリダイレクト
        return redirect()->route('productshowList');
    }
}
