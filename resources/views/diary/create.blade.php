<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>日記作成</title>
</head>
<body>
    <h4>日記作成</h4>

    @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <form method="post" action="{{ route('diary.save') }}">
        @csrf
        <div>
            <label for="title">タイトル：</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
            >
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="body">本文：</label>
            <textarea
                id="body"
                name="body"
                rows="4"
                cols="40"
            >{{ old('body') }}</textarea>
            @error('body')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">作成</button>
    </form>
    <p><a href="{{ route('diary.index') }}">日記一覧へ戻る</a></p>
</body>
</html>