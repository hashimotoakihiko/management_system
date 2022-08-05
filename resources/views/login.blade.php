<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel='stylesheet' href='./css/login.css'>
<!-- <link rel="stylesheet" href="/css/login.css" type="text/css"> -->
<!-- <link rel="stylesheet" href="{{ asset('css/login.css') }}" type="text/css"> -->
<title>会員登録</title>
</head>

<body>

<div class="header">
    <h1>vending machine</h1>
</div>


<div class="content">
    <h2>ユーザーログイン</h2>

<form method="post" action="product_list">
@csrf
    <input type="email" maxlength="25" name="email"  id="email">
    <input type="password" maxlength="25" name="password" id="password">
    <p><input type="submit" value="ログイン" id="login"></p>
</form>




    <!-- <div class="email">
        <label>メールアドレス: </label>
            <input type="email" id="email" name="email" placeholder="メールアドレスを入力">
    </div>

    <div class="pass">
        <label>パスワード:   </label>
            <input type="password" id="password" name="パスワード" placeholder="パスワードを入力"   minlength="8" required>
    </div> -->
<!-- 
<div class="main-wrap">
    <div class="input-wrap">
        <label>ユーザーID<input id="search-id" type="text"></label>
    </div>

    <div class="input-wrap">
        <label>パスワード<input id="search-password" type="text"></label>
    </div>

    <div class="button">
        <button>ログイン</button>
    </div>
    <p id="search-result"></p>
</div> -->



<div class="footer">

    <div class="registration">
        <button onclick="location.href='registration'">ユーザー新規登録</button>
    </div>
</div>

</body>
</html>