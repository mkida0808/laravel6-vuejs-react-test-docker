<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Hello/Index</title>
    <link rel="stylesheet" href="{{ asset('css/laravel6basicshoda/styles.css') }}">
</head>

<body>
    <h1>Blade/Index</h1>

    {{-- @isset($msg)
        <p>こんにちは、{{ $msg }}さん！</p>
    @else
    <p>お名前を入力して下さい</p>
    @endisset --}}

    {{-- <form method="post" action="/laravel6basicshoda">
        @csrf
        <input type="text" name="msg">
        <input type="submit">
    </form> --}}

    <ol>
        @foreach ($data as $item)
            @if ($loop->first)
                <p>※データ一覧</p>
                <ul>
            @endif
            <li>No.{{ $loop->iteration }} . {{ $item }}</li>
            @if ($loop->last)
                </ul>
                <p>-----ここまで</p>
            @endif
        @endforeach
    </ol>
</body>

</html>
