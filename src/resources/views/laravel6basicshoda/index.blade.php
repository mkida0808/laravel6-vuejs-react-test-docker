<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Hello/Index</title>
    <link rel="stylesheet" href="{{ asset('css/laravel6basicshoda/styles.css') }}">
</head>
<body>
    <h1>Index</h1>
    <p>{{ $msg }}</p>
    <form method="post" action="/laravel6basicshoda">
        @csrf
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body>
</html>
