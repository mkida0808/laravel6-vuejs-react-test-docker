<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
    <h1>Hello/Index</h1>
    <p>{{ $msg }}</p>

    <ul>
        @foreach ($data as $item)
        <li>{{ $item }}</li>
        @endforeach
    </ul>

    <p><a href="/hello/download">ダウンロード</a></p>
</body>
</html>
