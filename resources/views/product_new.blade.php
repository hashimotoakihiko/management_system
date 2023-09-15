
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
    <form action="{{ route('products.store') }}" method="POST">
    @csrf
        <fieldset>
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
                    {{ __('登録') }}
                </button>
            </div>
        </fieldset>
    </form>
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