<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel='stylesheet' href='./css/user_login.css'>
    <style>
    </style> 
    <meta charset="UTF-8">
    <title>有料会員登録</title>
</head>

<body>

<div class="header">
    <h1>vending machine</h1>
</div>


<div class="content">
    <h2>ユーザーログイン</h2>
  
    <div class="email">
        <label>メールアドレス: 
            <input type="text" name="email" placeholder="メールアドレスを入力">
            @foreach($users as $user)
            {{$user->email}}
            @endforeach       
                    
        </label>
      
    </div>

    <div class="pass">
        <label>パスワード: 
            <input type="text" name="パスワード" placeholder="パスワードを入力" >
            @foreach($users as $user)
            {{$user->password}} 
            @endforeach
                
        </label>
       
    </div>
    
</div>

<div class="footer">
    <div class="user_login">
        <input type="submit" value="ログイン" a herf="http://localhost:8888//product_information_list">
    </div>

    <div class="user_registration">
        <input type="submit" value="新規登録" a herf="http://localhost:8888//user_registration">
    </div>
</div>

</body>
</html>