<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>日記アプリ</title>
</head>
<body>
    <h4>日記一覧</h4>
        @foreach ($diaries as $diary)
            <div>
                <div>{{ $diary->date }}</div>
                <div>
                    <a href="{{ route('diary.show', $diary) }}">
                        {{ $diary->title }}
                    </a>
                </div>
            </div>
            <hr>
        @endforeach
</body>
</html>
