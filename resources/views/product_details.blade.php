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
    <h2>商品情報詳細画面</h2>

    <form action="{{ route('crud.index') }}" method="GET">
    @csrf
    </form>
    
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

    <!-- <div class="product_information_image">
        <img src="例：image.png******" alt="例：海の写真" title="例：空と海">
    </div>
    
    <div class="product_list">
        <div class="product_name">
            <label>商品名:
                <input type="text" name="product_name">
            </label><br>
        </div>
        
        <div class="price">
            <label>価 格:
                <input type="text" name="price">
            </label><br>
        </div>
        
        <div class="stock">
            <label>在庫数:
                <input type="text" name="stock">
            </label><br>
        </div>
        
        <div class="comment">
            <label>コメント:
                <input type="textarea" name="comment">
            </label><br>
        </div>
        
        <div class="company_name">
            <label>メーカー名:
                <select name="company_name">
                    <option value="1">サントリー  </option>
                    <option value="2">コカ・コーラ</option>
                    <option value="3">伊藤園      </option>
                    <option selected="4">アサヒ   </option>
                </select>
            </label><br>
        </div>
    </div> -->

</div>
    
    <div class="footer">
        <div class="product_edit">
        <button onclick="location.href='product_edit'">編集</button>
        </div>
    
        <div class="return">
            <button onclick="location.href='product_list'">戻る</button>
        </div>
    </div>

</body>
</html>