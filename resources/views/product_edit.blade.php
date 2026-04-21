@extends('layouts.app')

@section('title', '商品情報編集')

@section('content')
<section class="page-panel">
    <h2 class="page-heading">商品情報編集画面</h2>

    <div class="table-responsive mb-4">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>在庫数</th>
                    <th>メーカー名</th>
                    <th>コメント</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $products->id }}</td>
                    <td>{{ $products->product_name }}</td>
                    <td>{{ $products->price }}</td>
                    <td>{{ $products->stock }}</td>
                    <td>{{ $products->company_name ?? '' }}</td>
                    <td>{{ $products->comment }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <form action="{{ route('products.update', ['id' => $products->id]) }}" method="POST">
        @csrf
        <div class="form-grid">
            <div>
                <label for="product_name">商品の名称 <span class="required-badge">必須</span></label>
                <input type="text" class="form-control" name="product_name" id="product_name" value="{{ old('product_name', $products->product_name) }}" required>
            </div>
            <div>
                <label for="company_name">メーカー名 <span class="required-badge">必須</span></label>
                <input type="text" class="form-control" name="company_name" id="company_name" value="{{ old('company_name', $products->company_name ?? '') }}" required>
            </div>
            <div>
                <label for="id">ID <span class="required-badge">必須</span></label>
                <input type="text" class="form-control" name="id" id="id" value="{{ old('id', $products->id) }}" required>
            </div>
            <div>
                <label for="company_id">会社ID <span class="required-badge">必須</span></label>
                <input type="text" class="form-control" name="company_id" id="company_id" value="{{ old('company_id', $products->company_id) }}" required>
            </div>
            <div>
                <label for="price">価格 <span class="required-badge">必須</span></label>
                <input type="text" class="form-control" name="price" id="price" value="{{ old('price', $products->price) }}" required>
            </div>
            <div>
                <label for="stock">在庫数 <span class="required-badge">必須</span></label>
                <input type="text" class="form-control" name="stock" id="stock" value="{{ old('stock', $products->stock) }}" required>
            </div>
            <div>
                <label for="comment">コメント <span class="required-badge">必須</span></label>
                <input type="text" class="form-control" name="comment" id="comment" value="{{ old('comment', $products->comment) }}" required>
            </div>
        </div>

        <div class="form-actions">
            <a href="{{ route('productshowList') }}" class="btn btn-outline-secondary" role="button">一覧画面へ</a>
            <button type="submit" class="btn btn-success">更新</button>
        </div>
    </form>
</section>
@endsection
