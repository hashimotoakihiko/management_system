@extends('layout')
@section('title','有料会員登録')
@section('content')
  <h2>ユーザーログイン</h2>
  <div class="email">
    <label>メールアドレス:
      <input type="text" name="email" placeholder="メールアドレスを入力">
      
    </label>
  </div>
  
    <div class="pass">
    <label>パスワード:
      <input type="text" name="パスワード" placeholder="パスワードを入力" >
    </label>
  </div>
  @endsection