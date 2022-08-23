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
            <li>{{ $item->name}} [{{ $item->mail}}, {{ $item->age }}]</li>
        @endforeach
    </ul>
</body>
</html>
