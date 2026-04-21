@extends('layouts.app')

@section('title', 'ユーザー登録')

@section('content')
<section class="page-panel">
    <h2 class="page-heading">新規ユーザー登録</h2>
    @include('components.form-card')
</section>
@endsection
