<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>日記編集</title>
</head>
<body>
    <h4>日記編集</h4>

    @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <form method="post" action="{{ route('diary.update', $diary) }}">
        @csrf
        @method('patch')
        <div>
            <label for="title">タイトル</label>
            <input
                name="title"
                id="title"
                type="text"
                value="{{ old('title', $diary->title) }}"
            >
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="body">内容</label>
            <textarea
                name="body"
                id="body"
                cols="30"
                rows="10"
            >{{ old('body', $diary->body) }}</textarea>
            @error('body')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit">更新する</button>
        </div>
    </form>
    <p>
        <a href="{{ route('diary.show', $diary) }}">詳細画面へ戻る</a>
    </p>
</body>
</html>