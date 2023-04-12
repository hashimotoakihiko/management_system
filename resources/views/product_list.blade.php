<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel='stylesheet' href='./css/product_list.css'>
    <meta charset="UTF-8">
    <title>検索機能</title>
    <style>
    </style> 
</head>

<body>

<div class="header">
	<h1>vending machine</h1>
</div>


<div class="content">
    <h2>商品情報一覧</h2>

     <!-- 検索機能ここから -->

     <form action="{{ route('crud.index') }}" method="GET">
    @csrf
    <input type="text" name="keyword">
    <input type="submit" value="検索">
    </form>

    <!-- 新規作成ボタン -->
    <button style="margin-top:50px; margin-bottom:20px;" class="btn btn-primary" type=“button” onclick="location.href='/create'">新規作成</button>

    <!--テーブル-->
    <div class="table-responsive">
        <table class="table" style="width: 1000px; max-width: 0 auto;">
            <tr class="table-info">
            <th scope="col" >id</th>
                <th scope="col" >商品画像</th>
                <th scope="col" >商品名</th>
                <th scope="col" >価格</th>
                <th scope="col" >在庫数</th>
                <th scope="col" >メーカー名</th>
                <th scope="col" >詳細表示</th>
                <th scope="col" >削除</th>
            </tr>
            
            <!--レコードの繰り返し処理--> 
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td><img style="width:80px;" ></td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->company_name}}</td>
                <td><a href="/show/{{$product->id}}"><button type="button" class="btn btn-success">詳細</button></a></td>

                <td>
                <form  class="id">
                @csrf
                    <input data-user_id="{{$product->id}}" type="submit" class="btn btn-danger btn-dell" value="削除">
                </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
   
</div>
<!-- 頭文字3桁での検索可能(部分一致) -->
<!-- companiesテーブルに登録されている企業から選択できるようにする -->
<!-- リダイレクトの記述(結果表示) -->
    
<div class="footer">
    <!-- <div class="conpany_name">
        <div class="company_name">
            <label>メーカー名:
                <select name="company_name">
                    <option value="1">サントリー</option>
                    <option value="2">コカ・コーラ</option>
                    <option value="3">伊藤園</option>
                    <option selected="4">アサヒ</option>
                </select>
            </label><br>
        </div>
    </div> -->
    
    <div class="new_registration">
        <button onclick="location.href='product_new'">商品新規登録</button>
    </div>

    <div class="product_details">
        <button onclick="location.href='product_details'">詳細表示</button>    
    </div>
    
    <div class="product_deletion">
        <button onclick="location.href='product_details'">削除</button>
    </div>
    <!-- 削除処理実行前にダイアログにて確認を行う -->

    <div class="return">
        <button onclick="location.href='login'">トップページへ戻る</button>
    </div>
</div>


</body>
</html>