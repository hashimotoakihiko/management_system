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
    <!--  カテゴリープルダウン -->
    <!-- <div class="form-group">
        <label for="category-id">{{ __('カテゴリー') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label> -->
        <select class="form-control" id="category-id" name="category_id">
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->company_name }}</option>
            @endforeach
        </select>
      <!-- </div> -->
    </form>

    <!-- 新規作成ボタン -->
    <!-- <button style="margin-top:50px; margin-bottom:20px;" class="btn btn-primary" type=“button” onclick="location.href='/create'">新規作成</button> -->
   
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
                <!-- <th scope="col" >詳細表示</th>
                <th scope="col" >削除</th> -->
            </tr>
            
            <!--レコードの繰り返し処理--> 
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td><img style="width:80px;" ></td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->company_name}}
                    <!-- <select name="age">
                        <option value="20" selected>20歳</option>
                        <option value="30">30歳</option>
                    </select> -->
                </td>
                
                <!-- <td><a href="/show/{{$product->id}}"><button type="button" class="btn btn-success">詳細</button></a></td> -->

                <!-- <td>
                <form  class="id">
                @csrf
                    <input data-user_id="{{$product->id}}" type="button" class="btn btn-danger btn-dell" value="削除">
                </form>
                </td> -->
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

            </div>
        </table>
    </div>    
</div>
<!-- 頭文字3桁での検索可能(部分一致) -->
<!-- companiesテーブルに登録されている企業から選択できるようにする -->
<!-- リダイレクトの記述(結果表示) -->

<div class="footer">
    
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