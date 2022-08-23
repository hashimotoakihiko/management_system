<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel='stylesheet' href='./css/puroduct_list.css'>
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
    <h2>商品情報一覧</h2>

    <form method="post" action="{{ route('productsearch') }}">
    @csrf
        <div class="product_search">
            <div class="product_name">
                <label>商品名:  </label>
                <input type="text" class="product_name" name="product_name" value="{{ $products->product_name }}">
                @foreach($products as $product)
                {{ $products->product_name }} 
                @endforeach
                <input type="submit" name="search" value="検索">  
            </div>  




            <div class="company_name">

            </div>   

                    <!-- 頭文字3桁での検索可能(部分一致) -->
                    <!-- companiesテーブルに登録されている企業から選択できるようにする -->
                    <!-- リダイレクトの記述(結果表示) -->
        </div>
</div>

    

<div class="footer">
    <div class="product_list">
        <div class="product_id">
            <label>商品id:</label><br>
            <input type="text" name="id" value= "{{ $products->id }} ">
            
        </div>
        
        <div class="product_name">
            <label>商品名: </label><br>
            <input type="text" name="product_name" value= "{{ $products->product_name }}"> 
            
        </div>
        
        <div class="price">
            <label>価 格: </label><br>
            <input type="text" name="price" value= "{{ $products->price }}">
            
        </div>
        
        <div class="stock">
            <label>在庫数: </label><br>
            <input type="text" name="stock" value= "{{ $products->stock }}">
            
        </div>

        
    </div> 
    </form>   

    <div clkass="conpany_name">
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
    </div>
    
    <div class="new_registration">
            <form method="post" action="{{ route('product_new') }}">
            @csrf
                <!-- <input type="submit" value="新規登録"> 
                <a href="http://localhost:8888/product_new">商品新規登録</a> -->
                <button onclick="location.href='product_new'">商品新規登録</button>
            </form>
    </div>

    <div class="product_information_image">
        <img src="例：image.png******" alt="例：海の写真" title="例：空と海">
    </div>

    <div class="product_details">
        <!-- <input type="submit" 
                formaction="(product_details.php)" 
                name="product_details" 
                value="詳細表示"> -->
                <!-- <a href="http://localhost:8888/">詳細表示</a> -->
                <button onclick="location.href='product_details'">詳細表示</button>    
    </div>
    
    <div class="product_deletion">
        <!-- <input type="submit"
                formaction="(******)" 
                name="product_deletion"
                value="削除"> -->
                <!-- <a href="http://localhost:8888/">削除</a> -->
                <button onclick="location.href='product_details'">削除</button>
    </div>
    <!-- 削除処理実行前にダイアログにて確認を行う -->

    <div class="return">
        <button onclick="location.href='login'">トップページへ戻る</button>
    </div>
</div>


</body>
</html>