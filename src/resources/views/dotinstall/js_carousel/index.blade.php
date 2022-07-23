<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My carousel</title>
    <link rel="stylesheet" href="{{ asset('css/dotinstall/js_carousel/styles.css') }}">
</head>
<body>
    <h1>JSカルーセル編</h1>

    <section class="carousel">
        <div class="container">
            <ul>
                <li><img src="{{ asset('img/dotinstall/js_carousel/a.png') }}"></li>
                <li><img src="{{ asset('img/dotinstall/js_carousel/b.png') }}"></li>
                <li><img src="{{ asset('img/dotinstall/js_carousel/c.png') }}"></li>
            </ul>

            <button id="prev">&laquo;</button>
            <button id="next">&raquo;</button>
        </div>

        <nav>
            {{-- ボタンタグはJSで動的に生成する --}}
            {{-- <button class="current"></button>
            <button></button>
            <button></button> --}}
        </nav>
    </section>
    <script src="{{ asset('js/dotinstall/js_carousel/main.js') }}"></script>
</body>
</html>
