@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="/css/product_details.css">
@endsection
@section('content')
<div class="content">
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
                <th scope="col" >編集</th>
            </tr>
            <tr>
                <td>{{ $products->id }}</td>
                <td>
                    @if($products->image_path)
                        <img style="width:80px;" src="{{ asset('storage/' . $products->image_path) }}">
                    @else
                        <p>画像なし</p>
                    @endif
                </td>
                <td>{{ $products->product_name }}</td>
                <td>{{ $products->price }}</td>
                <td>{{ $products->stock }}</td>
                <td>{{ $products->company_name }}</td>
                <td>{{ $products->comment }}</td>
                <td><a href="{{ route('products.edit', ['id'=>$products->id]) }}" class="btn btn-info">編集</a></td>
            </tr>
        </table>
    </div>
    <div class="return mt-4">
        <button onclick="location.href='{{ route('productshowList') }}'">商品一覧へ戻る</button>
    </div>
</div>
@endsection
    
<div class="footer">
    <div class="return">
    <td><a href="{{ route('productshowList') }}" class="btn btn-info">戻る</a></td>
    </div>
</div>

</body>
</html>