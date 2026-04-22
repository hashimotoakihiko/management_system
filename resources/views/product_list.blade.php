@extends('layouts.app')
@section('title', '商品一覧')
@section('head')
<link rel="stylesheet" href="{{ asset('css/product_list.css') }}?v={{ filemtime(public_path('css/product_list.css')) }}">
@endsection
@section('content')
<section class="product-page">
    <div class="page-head">
        <h2>商品情報一覧</h2>
        <a class="primary-link" href="{{ route('products.create') }}">商品新規登録</a>
    </div>

    <form class="search-form" method="GET">
        <input type="text" name="keyword" placeholder="商品名・メーカー名で検索" value="{{ request('keyword') }}">
        <select name="company_id">
            <option value="">会社を選択してください</option>
            @foreach($companies as $company)
                <option value="{{ $company->id }}" {{ (string)request('company_id') === (string)$company->id ? 'selected' : '' }}>
                    {{ $company->company_name }}
                </option>
            @endforeach
        </select>
        <button type="submit" class="btn-search">検索</button>
    </form>

    <div class="table-wrap">
        <table class="product-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">商品画像</th>
                    <th scope="col">画像更新</th>
                    <th scope="col">商品名</th>
                    <th scope="col">価格</th>
                    <th scope="col">在庫数</th>
                    <th scope="col">メーカー名</th>
                    <th scope="col">コメント</th>
                    <th scope="col">操作</th>
                    <th scope="col">削除</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>

                    <td>
                        @if($product->image_path)
                            <img class="product-image" src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->product_name }}">
                        @else
                            <span class="text-muted">画像なし</span>
                        @endif
                    </td>

                    <td>
                        <form class="upload-form" method="POST" action="{{ route('product.upload') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image" class="upload-input">
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <button type="submit" class="btn-subtle">アップロード</button>
                        </form>
                    </td>

                    <td>{{ $product->product_name }}</td>
                    <td>&yen;{{ number_format($product->price) }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->company_name }}</td>
                    <td>{{ $product->comment }}</td>

                    <td>
                        <div class="action-links">
                            <a href="{{ route('products.show', ['id' => $product->id]) }}" class="btn-subtle">詳細</a>
                            <a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn-subtle">編集</a>
                        </div>
                    </td>
                    <td>
                        <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
                            @csrf
                            <button type="submit" class="btn-danger">削除</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if($products->hasPages())
    <div class="pagination-wrap">
        {{ $products->links() }}
    </div>
    @endif

    <div class="bottom-links">
        <a class="btn-subtle" href="{{ url('/login') }}">トップページへ戻る</a>
    </div>
</section>
@endsection
