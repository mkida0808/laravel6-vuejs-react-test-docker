<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Hello/Index</h1>
    <p>{{ $msg }}</p>

    <ul>
        @foreach ($result as $item)
            <li>{{ $item->id }}. {{ $item->name}} [{{ $item->mail}}, {{ $item->age }}]</li>
        @endforeach
    </ul>
</body>
</html>
