<!DOCTYPE html>
<html>
<html lang="ja"> </html>
<head>
<link rel="stylesheet" href="product_information_details.css">
<!-- <style>

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
    padding-top: 20px;
    padding-left:300px;
}

input[type=text]{
    width:200px;
}

.content{
    width:320px;
    height:290px;
}

.product_information_image{
    width: 100px;
    height: 100px;
    background-color: blue;
    /*text-align: center;*/
    line-height:2;
    margin-left: 100px;
    margin-bottom: 20px;
}

label{
    width:90px;
}

.footer{
  margin-top: 30px;
}

.product_information_details{
    width: 300px;
    text-align: center;
    line-height:2;
    margin-right: 200px;
}

.return{
    width: 300px;
    text-align: center;
    line-height:2;
    margin-right: 200px;
}


input[type=submit]{
    margin-left:100px;
    background-color:#525252;
    color:#FFF;
    font-weight:bold;
    display:block;
    padding:3px 40px;
    margin-bottom: 50px;
}



</style> -->
<meta charset="UTF-8">
<title>会員登録</title>
</head>
<body>


<div class="header">
    <h1>vending machine</h1>
</div>

<form name="add_form" action="http://localhost/user_login.blade.php" method="post">
         
  <div class="content">
    <h2>商品情報詳細画面</h2>
    <div class="product_information_image">
         <img src="例：image.png******" alt="例：海の写真" title="例：空と海">
    </div>
    
    <div class="product_information_list">
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
    </div>
  
    </div>
    
    <div class="footer">
        <div class="product_information_details">
            <input type="submit" value="編集" action="http://localhost/product_information_edit.blade.php">
        </div>
    
        <div class="return">
            <input type="submit" value="戻る" action="http://localhost/product_information_details.blade.php">
        </div>
    </div>
</form>

</body>
</html>