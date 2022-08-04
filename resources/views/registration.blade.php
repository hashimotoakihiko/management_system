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
      <label>ユーザー名:</label>
        <input type="text" name="name" placeholder="ユーザー名を入力">
    </div>

    <div class="email">
      <label>メールアドレス:</label>
        <input type="text" name="email" placeholder="メールアドレスを入力">
    </div>
    

  <form onSubmit="return CheckEmail()">
    <div class="pass1">
      <label for="pass1">パスワード:</label>
      <input type="password" id="pass1" name="パスワード" placeholder="パスワードを入力" required>
    </div>

    <div class="pass2">
      <label for="pass1">パスワード(確認用):</label>
      <input type="password" id="pass2" name="パスワード(確認用)" placeholder="パスワード(確認用)を入力" required>
    </div>

    <p>
    <input type="submit" id="submit" name="register" value="登録">
   </p>
  </form>

  <script language="JavaScript" type="text/javascript">
<!--
  function CheckEmail() {
    //IE対応の為変更
    //var mail = email_1.value; //メールフォームの値を取得
    //var mailConfirm = emailConfirm_1.value; //メール確認用フォームの値を取得
    var mail = document.getElementById("pass1").value; //メールフォームの値を取得
    var mailConfirm = document.getElementById("pass2").value; //メール確認用フォームの値を取得
    // パスワードの一致確認
    if (mail != mailConfirm){
      alert("パスワードと確認用パスワードが一致しません"); // 一致していなかったら、エラーメッセージを表示する
      return false;
    }else{
      return true;
    }
  };
// -->
</script>

</div>
<!-- 
<form onSubmit="return CheckEmail_1()">
  <div>
    <label for="email_1">メール:</label>
  </div>
  <div>
    <input type="email" id="email_1" required>
  </div>
  <div>
    <label for="emailConfirm_1">メール確認用:</label>
  </div>
  <div>
    <input type="email" id="emailConfirm_1" required>
  </div>
  <p>
    <input type="submit" id="submit">
  </p>
</form>

<script language="JavaScript" type="text/javascript">

  function CheckEmail_1() {
    //IE対応の為変更
    //var mail = email_1.value; //メールフォームの値を取得
    //var mailConfirm = emailConfirm_1.value; //メール確認用フォームの値を取得
    var mail = document.getElementById("email_1").value; //メールフォームの値を取得
    var mailConfirm = document.getElementById("emailConfirm_1").value; //メール確認用フォームの値を取得
    // パスワードの一致確認
    if (mail != mailConfirm){
      alert("パスワードと確認用パスワードが一致しません"); // 一致していなかったら、エラーメッセージを表示する
      return false;
    }else{
      return true;
    }
  };
//
</script> -->

<div class="footer">
  <div class="registration">
    <a href="http://localhost:8888/login">登録</a>
  </div>
  
  <div class="return">
            <button onclick="location.href='login'">トップページへ戻る</button>
  </div>
</div>

</body>
</html>