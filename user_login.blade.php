<!DOCTYPE html>
<html>
<html lang="ja"> </html>
<head>
<link rel="stylesheet" href="user_login.css">
<!-- <style>



</style> -->
<meta charset="UTF-8">
<title>会員登録</title>
</head>
<body>



<div class="header">
	<h1>ユーザーログイン</h1>
</div>

<form name="add_form" action="http://localhost/******" method="post">

  <div class="content">
    <!--<div class="name">-->
    <!--  <label>ユーザー名:-->
    <!--    <input type="text" name="name" placeholder="ユーザー名を入力">-->
    <!--  </label>-->
    <!--</div>-->

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
      <input type="submit" value="ログイン" action="http://localhost/product_information_list.html">
    </div>
    
    <div class="user_registration">
      <input type="submit" value="新規登録" action="http://localhost/user_registration.html">
    </div>
  </div>

</form>


</body>
</html>