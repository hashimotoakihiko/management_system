<!DOCTYPE html>
<html lang="ja">
<head>
  <link rel='stylesheet' href='./css/user_registration.css'>
  <meta charset="UTF-8">
  <title>会員登録</title>
  <style>
  </style>
</head>

<body>

<div class="header">
	<h1>vending machine</h1>
</div>

<form name="add_form" action="http://localhost/user_login.blade.php" method="post">

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
      <input type="submit" value="登録" action="http://localhost/user_login.blade.php">
    </div>
    
    <div class="return">
      <input type="submit" value="戻る" action="http://localhost/user_login.blade.php">
    </div>
  </div>

</form>


</body>
</html>