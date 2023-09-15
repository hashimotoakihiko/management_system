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
        <input type="text" name="keyword" placeholder="キーワード検索">
        <select name="company_id">
            <option value="">会社を選択してください</option>
            @foreach($companies as $company)
                <option value="{{ $company->id }}">{{ $company->company_name }}</option>
            @endforeach
        </select>
        <button type="submit">検索</button>
    </form>

    <!--  カテゴリープルダウン -->
    

        <!-- <input type="submit" value="検索"> -->

        <!-- 新規作成ボタン -->
        <!-- <button style="margin-top:50px; margin-bottom:20px;" class="btn btn-primary" type=“button” onclick="location.href='/create'">新規作成</button> -->
    
        <!--テーブル-->
        <div class="table-responsive">
            <table class="table" style="width: 2000px; max-width: 0 auto;">
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
                
                <!--レコードの繰り返し処理--> 
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td><img style="width:80px;" ></td>
                    <td><form method="POST" action="/upload" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="image">
                    <button>アップロード</button>
                    </form></td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->company_name}}</td>
                    <td>{{$product->comment}}</td>
                    <td><button><a href="{{ route('products.show', ['id'=>$product->id]) }}" class="btn btn-primary">詳細</a></button></td>
                    <td>
                        <form action="{{ route('products.destroy', ['id'=>$product->id]) }}" method="POST" onclick="return confirm('本当に削除しますか？');">
                        @csrf
                            <button type="submit" class="btn btn-danger" onClick="delete_alert(event);return false;">削除</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                
                <div>
                <!-- // 下記のようにページネーターを記述するとページネートで次ページに遷移しても、検索結果を保持する -->
                <!-- //$variablesはご自身の値を使用ください。 -->
                </div>
            </table>
        </div>
   
</div>

<div class="footer">
    
    <div class="new_registration">
        <!-- <button onclick="location.href='product_new'">商品新規登録</button> -->
        <button><a href="{{ route('products.create') }}">商品新規登録</a></button>
    </div> 

    <div class="return">
        <button onclick="location.href='login'">トップページへ戻る</button>
    </div>
</div>


</body>
</html>