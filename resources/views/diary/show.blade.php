<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>{{ $diary->title }}</title>
</head>
<body>
    <h4>{{ $diary->title }}</h4>
    <div>
        <div>{{ $diary->body }}</div>
        <div>{{ $diary->date }}</div>
    </div>
    <p>
        <a href="{{ route('diary.index') }}">日記一覧へ戻る</a>
    </p>
</body>
</html>


