<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>{{ $diary->title }}</title>
</head>
<body>
    <h4>{{ $diary->title }}</h4>
    <div>
        <a href="{{ route('diary.edit', $diary) }}">
            <button type="button">編集</button>
        </a>
    </div>
    <form method="post" action="{{ route('diary.destroy', $diary) }}">
        @csrf
        @method('delete')
        <button type="submit">削除</button>
    </form>
    <div>
        <div>{{ $diary->body }}</div>
        <div>{{ $diary->date }}</div>
    </div>
    <p>
        <a href="{{ route('diary.index') }}">日記一覧へ戻る</a>
    </p>
</body>
</html>


