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
        <li>{{ $item->id }} - {{ $item->name }} - {{ $item->age }} - {{ $item->mail }}</li>
        @endforeach
    </ul>

    <form action="/laravel6advancedshoda/hello" method="post">
        @csrf
        ID: <input type="text" id="id" name="id">
        <input type="submit" value="send">
    </form>
</body>
</html>
