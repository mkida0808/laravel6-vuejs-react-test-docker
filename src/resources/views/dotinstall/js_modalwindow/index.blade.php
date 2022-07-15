<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Modal Window</title>
    <link rel="stylesheet" href="{{ asset('css/dotinstall/js_modalwindow/styles.css') }}">
</head>
<body>
    <section id="modal" class="hidden">
        <p>モーダルテスト。モーダルテスト。モーダルテスト。モーダルテスト。モーダルテスト。モーダルテスト。モーダルテスト。モーダルテスト。モーダルテスト。モーダルテスト。</p>
        <div id="close">
            閉じる
        </div>
    </section>
    
    <div id="mask" class="hidden"></div>

    <div id="open">
        詳細を見る
    </div>



    <script src="{{ asset('js/dotinstall/js_modalwindow/main.js') }}"></script>
</body>
</html>
