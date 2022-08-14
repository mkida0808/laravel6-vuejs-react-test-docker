<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Hello/Index</title>
    <link rel="stylesheet" href="{{ asset('css/laravel6basicshoda/styles.css') }}">
</head>

<body>
    <h1>Blade/Index</h1>

    @if ($msg !== '')
        <p>こんにちは、{{ $msg }}さん！</p>
    @else
    <p>お名前を入力して下さい</p>
    @endif

    <form method="post" action="/laravel6basicshoda">
        @csrf
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body>

</html>
