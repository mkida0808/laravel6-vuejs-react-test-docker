<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Hello/Index</title>
    <link rel="stylesheet" href="{{ asset('css/laravel6basicshoda/styles.css') }}">
</head>
<body>
    <h1>Index</h1>
    <p>これは、Helloコントローラーのindexアクションです</p>
    <ul>
        <li>ID: {{ $id }}</li>
        <li>PASS: {{ $pass }}</li>
        <li>Request: <pre>{{ $request }}</pre></li>
        <li>Response: <pre>{{ $response }}</pre></li>

        <li>url: {{ $request->url() }}</li>
        <li>fullUrl: {{ $request->fullUrl() }}</li>
        <li>path: {{ $request->path() }}</li>

        <li>status: {{ $response->status() }}</li>
        <li>content: {{ $response->content() }}</li>
    </ul>
</body>
</html>
