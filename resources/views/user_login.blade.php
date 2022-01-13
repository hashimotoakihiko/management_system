<!DOCTYPE html>
<html>
<html lang="ja"> </html>
<head>
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

.user_login{
	height: 60px;
}

.user_registration{
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
<link rel=”stylesheet” href="./css/user_login.css">

</head>
<body>

<div class="header">
	<h1>vending machine</h1>
</div>

<form name="add_form" method="post">

  <div class="content">
    <h2>ユーザーログイン</h2>
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
  
  </div>

  <div class="footer">
    <div class="user_login">
      <input type="submit" value="ログイン"> 
      <a herf="http://localhost8888/product_information_list.html">
    </div>
    
    <div class="user_registration">
      <input type="submit" value="新規登録">
      <a herf="http://localhost8888/user_registration.html">
    </div>
  </div>

</form>


</body>
</html>