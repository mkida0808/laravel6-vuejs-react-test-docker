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

    <button>実行1</button>
    <h1 id="target" title="見出しテスト" class="my-border" data-translation="kida">キダ</h1>
    <p>こんにちは。こんにちは。こんにちは。</p>
    <p>こんにちは。こんにちは。こんにちは。</p>
    <p>こんにちは。こんにちは。こんにちは。</p>


    <button id="button2">実行2</button>

    <br><br><br>

    <input type="text">
    <button id="button3">要素を追加</button>
    <ul>
    </ul>

    <select>
        <option value="red">赤</option>
        <option value="blue">青</option>
        <option value="yellow">黄</option>
    </select>
    <button id="button4">信号機の色を追加</button>

    <ul>
    </ul>

    <script src="{{ asset('js/dotinstall/js_dom/main.js') }}"></script>
</body>
</html>
