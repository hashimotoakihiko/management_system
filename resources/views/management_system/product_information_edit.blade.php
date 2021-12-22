<!DOCTYPE html>
<html>
<html lang="ja"> </html>
<head>
<link rel="stylesheet" href="product_information_edit.css">
<!-- <style>

</style> -->
<meta charset="UTF-8">
<title>会員登録</title>
</head>
<body>



<div class="header">
    <h1>商品情報編集画面</h1>
</div>

<form name="add_form" action="http://localhost/user_login.blade.php" method="post">
         
    <div class="content">
        
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
        <div class="product_information_edit">
            <input type="submit" value="更新" action="http://localhost/product_information_details.blade.php">
        </div>
    
        <div class="return">
            <input type="submit" value="戻る" action="http://localhost/product_information_details.blade.php">
        </div>
    </div>
</form>


</body>
</html>