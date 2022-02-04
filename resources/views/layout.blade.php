<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel='stylesheet' href='./css/user_login.css'>
    <style>
    </style> 
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>

<body>

<div class="header">
	@include('header')
</div>


<div class="content">
  @yield('content')
</div>

  <div class="footer">
  @include('footer')
  </div>


</body>
</html>