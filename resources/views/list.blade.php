<!DOCTYPE html>
<html>
<html lang="ja"> </html>
<head>
<link rel="stylesheet" href="product_information_list.css">
<style>

body {
    height: 100%;
    width: 100%;
    padding: 0;
    margin: 0;
    background-color: white;
}

.header{
	width:420px;
    background-color:gray;
    padding: auto;
    text-align: center;
	border-radius:5px;
	border:solid #000;
    height: 150px;
    margin: auto;
    font-family:fantasy;
    font-size: 25px;
}

form {
    padding: 20px;
}

input[type=text]{
	width:200px;
}

.content{
	width:320px;
	height:220px;
	margin: auto;
}

label{
	width:90px;
	background-color: green;
	margin: auto;
}

.product_search{
    width: 320px;
}

.new_registration{
	height: 60px;
	padding-top: 30px;
	
}

input[type=submit]{
    background-color:#525252;
	color:#FFF;
	font-weight:bold;
	display:block;
	padding:3px 20px;
	display:inline-block;
	
}

.product_name{
	margin: auto;
}

.company_name{
	margin: auto;
}

.product_information_list{
    width: 400px;
    text-align: center;
    line-height:2;
    height: 350px;
    text-align:center;
    margin: auto;
}

.product_information_image{
    width: 100px;
    height: 100px;
    text-align: center;
    line-height:2;
    margin: auto;
}

</style>
<meta charset="UTF-8">
<title>会員登録</title>
</head>
<body>

<div class="header">
	<h1>vending machine</h1>
</div>

<form name="add_form" action="http://localhost/user_login.blade.php" method="post">

    <div class="content">
        <h2>商品情報一覧</h2>

        <div class="product_search">
            <div class="product_name">
                <label>商品名:
                    <form action="{{ route('products') }}" method="GET">
                        <input type="text" name="product_name" placeholder="商品名を入力" value="{{ $product_name ?? '' }}">
                        <input type="submit" value="検索">
                    </form>
                </label>
            </div>
            
            <div class="company_name">
                <label>メーカー名:
                    <form action="{{ route('companies') }}" method="GET">
                        <input type="text" name="company_name" placeholder="メーカー名を入力" value="{{ $company_name }}">
                        <input type="submit" value="検索">
                    </form>
                    
                    <input type="text" name="company_name" placeholder="メーカー名を入力">
                    <input type="submit" value="検索"> -->

                    <!-- 頭文字3桁での検索可能(部分一致) -->
                    <!-- companiesテーブルに登録されている企業から選択できるようにする -->
                    <!-- リダイレクトの記述(結果表示) -->
                </label>
            </div>
        </div>  -->
        
        <div class="new_registration">
            <input type="submit"  formaction="product_information_new_registration"  name="new_registration"  value="新規登録">
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
    
    
</form>


</body>
</html>