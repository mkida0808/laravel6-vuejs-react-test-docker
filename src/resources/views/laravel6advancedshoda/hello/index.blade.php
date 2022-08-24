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
        @foreach ($data as $item)
            {{-- <li>{{ $item->id }}. {{ $item->name}} [{{ $item->mail}}, {{ $item->age }}]</li> --}}
            <li>{{ $item->id }}. {{ $item->name_and_mail }}</li>
        @endforeach
    </ul>
</body>
</html>
