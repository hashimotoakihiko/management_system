<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel='stylesheet' href='./css/registration.css'>
    <style>
    </style> 
    <meta charset="UTF-8">
    <title>会員登録</title>
</head>

<body>

<div class="header">
  <h1>vending machine</h1>
</div>


<div class="content">
<h2>新規ユーザー</h2>

  <div class="name">
    <label>ユーザー名:
      <input type="text" name="name" placeholder="ユーザー名を入力">
    </label>
  </div>

  <div class="email">
    <label>メールアドレス:
      <input type="text" name="email" placeholder="メールアドレスを入力">
    </label>
  </div>
  
    <div class="pass">
    <label>パスワード:
      <input type="text" name="パスワード" placeholder="パスワードを入力">
    </label>
  </div>

  <div class="pass">
    <label>パスワード(確認用):
      <input type="text" name="パスワード(確認用)" placeholder="パスワード(確認用)を入力">
    </label>
  </div>
</div>

<div class="footer">
  <div class="registration">
    <a href="http://localhost:8888/login">登録</a>
  </div>
  
  <div class="return">
    <a href="http://localhost:8888/login">戻る</a>
  </div>
</div>

</body>
</html>