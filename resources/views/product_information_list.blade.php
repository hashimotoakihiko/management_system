<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel='stylesheet' href='./css/puroduct_information_list.css'>
    <meta charset="UTF-8">
    <title>会員登録</title>
    <style>
    </style> 
</head>

<body>

<div class="header">
	<h1>vending machine</h1>
</div>

<!-- <form name="add_form" action="http://localhost:8888//product_information_list" method="post"> -->

    <div class="content">
        <h2>商品情報一覧</h2>
        <div class="product_search">
            <div class="product_name">
                <label>商品名: 
                    <form method="POST" action="{{ route('showLogin') }}" > 
                        @csrf
                        <input type="text" name="product_id"  value="{$user['id']}" placeholder="商品名を入力" > 
                        <input type="submit" value="検索">
                    </form>
                    <form action="/post/create" method="post">
                </label>
            </div> 
            
            <div class="company_name">
                <label>メーカー名:
                    <form method="POST" action="{{ route('showLogin') }}" > 
                        @csrf
                        <input type="text" name="company_name" placeholder="メーカー名を入力">
                        <input type="submit" value="検索"> 
                    </form>

                    <!-- 頭文字3桁での検索可能(部分一致) -->
                    <!-- companiesテーブルに登録されている企業から選択できるようにする -->
                    <!-- リダイレクトの記述(結果表示) -->

                </label>
            </div>
        
            <div class="new_registration">
                <form method="POST" action="{{ route('showLogin') }}">
                 <input type="submit" value="新規登録"> 
                </form>
            </div>
        </div>
    </div>


    <div class="footer">
        <div class="product_information_list">
            <div class="id">
                <label>id:
                <input type="text" name="id">
                </label><br>
            </div>
            
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
            
            <div class="product_information_image">
                <img src="例：image.png******" alt="例：海の写真" title="例：空と海">
            </div>
    
        <div class="product _details">
            <input type="submit" 
                   formaction="(product_information_details.php)" 
                   name="product_information_details" 
                   value="詳細表示">
        </div>
        
        <div class="product_deletion">
            <input type="submit"
                   formaction="(******)" 
                   name="product_deletion"
                   value="削除">
        </div>
        


        <!-- 削除処理実行前にダイアログにて確認を行う -->




    </div>
    
    
<!-- </form> -->


</body>
</html>