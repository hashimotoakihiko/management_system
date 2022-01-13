<!DOCTYPE html>
<html>
<html lang="ja"> </html>
<head>
<link rel="stylesheet" href="user_registration.css">
<style>

body {
  height: 100%;
  width: 100%;
  padding: 0;
  margin: 0;
  background-color: white;
}

.header{
  padding-bottom: 50px;
}

.header{
  width:420px;
  background-color:gray;
  padding: auto;
  text-align: center;
  border-radius:5px;
  border:solid #000;
  height: 150px;
  margin: auto;
  font-family:fantasy;
  font-size: 25px;
}

form {
    padding: 20px;
    padding-left:500px;
}

input[type=text]{
	width:320px;
}

.content{
	width:320px;

}

label{
	width:120px;
   
}

.registration{
	height: 60px;
}

.footer{
  margin-top: 30px;
}

input[type=submit]{
  background-color:#525252;
	color:#FFF;
	font-weight:bold;
	display:block;
	padding:3px 15px;
}

</style>
<meta charset="UTF-8">
<title>会員登録</title>
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