@extends('layouts.app')

@section('title', 'ログイン')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-0">ユーザーログイン</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="/login">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">メールアドレス</label>
                            <input type="email" class="form-control" id="email" name="email" maxlength="25" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">パスワード</label>
                            <input type="password" class="form-control" id="password" name="password" maxlength="25" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary" id="login">ログイン</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-3">
        <a href="{{ route('new') }}" class="btn btn-link">ユーザー新規登録</a>
    </div>
@endsection