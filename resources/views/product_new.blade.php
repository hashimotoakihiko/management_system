
<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel='stylesheet' href='./css/product_new.css'>
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

        <h2>商品新規登録</h2>

        <div class="product_new">
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
        <div class="registration">
            <button onclick="location.href='product_details'">商品登録を行う</button>
        </div>
        
        <div class="return">
            <button onclick="location.href='product_list'">商品一覧へ戻る</button>
        </div>
    </div>
    

</body>
</html>