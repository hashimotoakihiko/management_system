<!DOCTYPE html>
<html>
<html lang="ja">
<head>
    <link rel='stylesheet' href='./css/product_details.css'>
    <meta charset="UTF-8">
    <title>会員登録</title>
    <style> 
    </style> 
</head>

<body>

<div class="header">
    <h1>vending machine</h1>
</div>

        
<div class="content">
    <div class="table-responsive">
        <table class="table" style="width: 1000px; max-width: 0 auto;">
            <tr class="table-info">
            <th scope="col" >id</th>
            <th scope="col" >商品画像</th>
                <th scope="col" >商品名</th>
                <th scope="col" >価格</th>
                <th scope="col" >在庫数</th>
                <th scope="col" >メーカー名</th>
                <th scope="col" >コメント</th>
                <th scope="col" >詳細表示</th>
                <th scope="col" >削除</th>
            </tr>
 
            <tr>
                <td>{{$products->id}}</td>
                <td><img style="width:80px;" ></td>
                <td>{{$products->product_name}}</td>
                <td>{{$products->price}}</td>
                <td>{{$products->stock}}</td>
                <td>{{$products->company_name}}
                <td>{{$products->comment}}</td>
                <td><a href="{{ route('products.edit', ['id'=>$products->id]) }}" class="btn btn-info">編集</a></td>
            </tr>
            <div>
            <!-- // 下記のようにページネーターを記述するとページネートで次ページに遷移しても、検索結果を保持する -->

            </div>
        </table>
    </div> 
</div>
    
<div class="footer">
    <div class="return">
    <td><a href="{{ route('productshowList') }}" class="btn btn-info">戻る</a></td>
    </div>
</div>

</body>
</html>