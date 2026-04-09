@extends('layouts.app')

@section('title', 'ユーザー登録')

@section('content')
  <h2 class="mb-4">新規ユーザー登録</h2>
  @include('components.form-card')
@endsection
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
  <!-- <div class="registration">
    <a href="http://localhost:8888/login">登録</a>
  </div> -->
  
  <div class="return">
            <button onclick="location.href='login'">トップページへ戻る</button>
  </div>
</div>

</body>
</html>