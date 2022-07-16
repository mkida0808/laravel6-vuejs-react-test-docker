<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dotinstall/js_hamburgermenu/styles.css') }}">
    <title>My Site</title>
</head>
<body>
    <p style="padding: 0 16px;">JSハンバーガーメニュー編</p>

    <header>
        <div class="logo">
            <h1>LOGO</h1>
        </div>

        <div class="pc-menu">
            <nav>
                <ul>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Menu</a></li>
                </ul>
            </nav>
        </div>

        <div class="sp-menu">
            <span class="material-icons" id="open">menu</span>
        </div>
    </header>

    <div class="overlay">
        <span class="material-icons" id="close">close</span>
        <nav>
            <ul>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Menu</a></li>
            </ul>
        </nav>
    </div>

    <main>
        <p>こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。</p>
        <p>こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。</p>
    </main>

    <script src="{{ asset('js/dotinstall/js_hamburgermenu/main.js') }}"></script>
</body>
</html>
