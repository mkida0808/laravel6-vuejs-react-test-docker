<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
    <h1>Hello/Index</h1>
    {{-- <p>{!! $msg !!}</p> --}}

    <form action="/laravel6advancedshoda/hello" method="post">
        @csrf
        <input type="text" name="name">
        <input type="text" name="mail">
        <input type="text" name="tel">
        <input type="submit">
    </form>

    <ul>
        @for ($i = 0; $i < count($keys); $i++)
        <li>{{ $keys[$i] }} - {{ $values[$i] }}</li>
        @endfor
    </ul>
</body>
</html>
