@extends('layout')
@section('title','有料会員登録')
@section('content')
  <h2>ユーザーログイン</h2>
  
  <div class="email">
    <label>メールアドレス:@foreach($users as $user)
      <input type="text" name="email" placeholder="メールアドレスを入力">
      {{$user->email}}
      @endforeach
    </label>

  </div>
  
    <div class="pass">
    <label>パスワード:@foreach($users as $user)
      <input type="text" name="パスワード" placeholder="パスワードを入力" >
    {{$user->password}}
    @endforeach
    </label>
  </div>
  @endsection