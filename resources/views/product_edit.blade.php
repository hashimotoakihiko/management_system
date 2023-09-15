<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel='stylesheet' href='./css/product_edit.css'>
    <meta charset="UTF-8">
    <title>会員登録</title>
    <style>
    </style> 
</head>

<meta charset="UTF-8">
<title>会員登録</title>
</head>
<body>

<div class="header">
	<h1>vending machine</h1>
</div>


<div class="content">
    <h2>商品情報編集画面</h2>
    
    <div class="container small">
        <h1>商品を編集</h1>
        <form action="{{ route('products.update', ['id'=>$products->id]) }}" method="POST">
        @csrf
            <fieldset>
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
                            
                        <div class="form-group">
                            <label for="product_name">{{ __('商品の名称') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                            <input type="text" class="form-control" name="product_name" id="product_name">
                            <label for="company_name">{{ __('メーカー名') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                            <input type="text" class="form-control" name="company_name" id="company_name">
                            <label for="id">{{ __('ID') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                            <input type="text" class="form-control" name="id" id="id">
                            <label for="company_id">{{ __('会社ID') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                            <input type="text" class="form-control" name="company_id" id="company_id">
                            <label for="price">{{ __('価格') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                            <input type="text" class="form-control" name="price" id="price">
                            <label for="stock">{{ __('在庫数') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                            <input type="text" class="form-control" name="stock" id="stock">
                            <label for="comment">{{ __('コメント') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                            <input type="text" class="form-control" name="comment" id="comment">
                        </div>
                        <div class="d-flex justify-content-between pt-3">
                            <a href="{{ route('productshowList') }}" class="btn btn-outline-secondary" role="button">
                                <i class="fa fa-reply mr-1" aria-hidden="true"></i>{{ __('一覧画面へ') }}
                            </a>
                            <button type="submit" class="btn btn-success">
                                {{ __('更新') }}
                            </button>
                        </div>
            </fieldset>
        </form>
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
    <div class="product_details">
        <button onclick="location.href='product_details'">更新</button>
    </div>

    <div class="return">
        <button onclick="location.href='product_details'">戻る</button>
    </div>
</div>
    
  


</body>
</html>