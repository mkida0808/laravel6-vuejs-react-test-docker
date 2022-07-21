<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Tab Menu</title>
    <link rel="stylesheet" href="{{ asset('css/dotinstall/js_tabmenu/styles.css') }}">
</head>
<body>
    <h1>JSタブメニュー編</h1>

    <div class="container">
        <ul class="menu">
            <li><a href="#" class="active" data-id="about">サイトの概要</a></li>
            <li><a href="#" data-id="service">サービス内容</a></li>
            <li><a href="#" data-id="contact">お問い合わせ</a></li>
        </ul>
        <section class="content active" id="about">
            サイトの概要。サイトの概要。サイトの概要。サイトの概要。サイトの概要。サイトの概要。サイトの概要。サイトの概要。サイトの概要。サイトの概要。サイトの概要。サイトの概要。サイトの概要。サイトの概要。サイトの概要。
        </section>
        <section class="content" id="service">
            サービス内容。サービス内容。サービス内容。サービス内容。サービス内容。サービス内容。サービス内容。サービス内容。サービス内容。サービス内容。サービス内容。サービス内容。サービス内容。サービス内容。サービス内容。
        </section>
        <section class="content" id="contact">
            お問い合わせ。お問い合わせ。お問い合わせ。お問い合わせ。お問い合わせ。お問い合わせ。お問い合わせ。お問い合わせ。お問い合わせ。お問い合わせ。お問い合わせ。お問い合わせ。お問い合わせ。お問い合わせ。お問い合わせ。
        </section>
    </div>


    <script src="{{ asset('js/dotinstall/js_tabmenu/main.js') }}"></script>
</body>
</html>
