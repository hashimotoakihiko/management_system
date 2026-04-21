@extends('layouts.app')

@section('title', '商品新規登録')

@section('content')
<section class="page-panel">
    <h2 class="page-heading">商品新規登録</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-grid">
            <div>
                <label for="product_name">商品の名称 <span class="required-badge">必須</span></label>
                <input type="text" class="form-control" name="product_name" id="product_name" required>
            </div>
            <div>
                <label for="company_name">メーカー名 <span class="required-badge">必須</span></label>
                <input type="text" class="form-control" name="company_name" id="company_name" required>
            </div>
            <div>
                <label for="id">ID <span class="required-badge">必須</span></label>
                <input type="text" class="form-control" name="id" id="id" required>
            </div>
            <div>
                <label for="company_id">会社ID <span class="required-badge">必須</span></label>
                <input type="text" class="form-control" name="company_id" id="company_id" required>
            </div>
            <div>
                <label for="price">価格 <span class="required-badge">必須</span></label>
                <input type="text" class="form-control" name="price" id="price" required>
            </div>
            <div>
                <label for="stock">在庫数 <span class="required-badge">必須</span></label>
                <input type="text" class="form-control" name="stock" id="stock" required>
            </div>
            <div>
                <label for="comment">コメント <span class="required-badge">必須</span></label>
                <input type="text" class="form-control" name="comment" id="comment" required>
            </div>
        </div>

        <div class="form-actions">
            <a href="{{ route('productshowList') }}" class="btn btn-outline-secondary" role="button">一覧画面へ</a>
            <button type="submit" class="btn btn-success">登録</button>
        </div>
    </form>
</section>
@endsection
