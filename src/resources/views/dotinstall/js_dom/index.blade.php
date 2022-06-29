<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>JavaScript DOM</title>
    <style>
        .my-color {
            color: red;
            background-color: skyblue;
        }
        .my-border {
            border-bottom: 4px solid orange;
        }
    </style>
</head>
<body>
    <p>JavaScript DOM</p>

    <h1 id="target" title="見出しテスト" class="my-border" data-translation="kida">キダ</h1>
    <p>こんにちは。こんにちは。こんにちは。</p>
    <p>こんにちは。こんにちは。こんにちは。</p>
    <p>こんにちは。こんにちは。こんにちは。</p>

    <button>実行</button>

    <script src="{{ asset('js/dotinstall/js_dom/main.js') }}"></script>
</body>
</html>
