@extends('layouts.app')

@section('title', 'ユーザー登録')

@section('content')
    <h2 class="mb-4">新規ユーザー登録</h2>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    @yield('form-content')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('form-content')
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">ユーザー名 <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">メールアドレス <span class="text-danger">*</span></label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">パスワード <span class="text-danger">*</span></label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="pass1" required>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">パスワード（確認用） <span class="text-danger">*</span></label>
            <input type="password" class="form-control" name="password_confirmation" id="pass2" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('login') }}" class="btn btn-secondary">ログイン画面へ</a>
            <button type="submit" class="btn btn-success">登録する</button>
        </div>
    </form>
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