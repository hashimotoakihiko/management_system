@extends('layouts.app')
@section('title', '商品詳細')
@section('content')
<section class="page-panel">
    <h2 class="page-heading">商品詳細</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">商品画像</th>
                    <th scope="col">商品名</th>
                    <th scope="col">価格</th>
                    <th scope="col">在庫数</th>
                    <th scope="col">メーカー名</th>
                    <th scope="col">コメント</th>
                    <th scope="col">編集</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $products->id }}</td>
                    <td>
                        @if($products->image_path)
                            <img style="width:80px;" src="{{ asset('storage/' . $products->image_path) }}" alt="{{ $products->product_name }}">
                        @else
                            <span>画像なし</span>
                        @endif
                    </td>
                    <td>{{ $products->product_name }}</td>
                    <td>{{ $products->price }}</td>
                    <td>{{ $products->stock }}</td>
                    <td>{{ $products->company_name }}</td>
                    <td>{{ $products->comment }}</td>
                    <td><a href="{{ route('products.edit', ['id' => $products->id]) }}" class="btn btn-info">編集</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="form-actions">
        <a href="{{ route('productshowList') }}" class="btn btn-outline-secondary">商品一覧へ戻る</a>
    </div>
</section>
@endsection
