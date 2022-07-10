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

    <input type="radio" name="color" value="red"> 赤
    <input type="radio" name="color" value="blue"> 青
    <input type="radio" name="color" value="yellow"> 黄
    <button id="button5">ラジオボタンの色を追加</button>
    <ul></ul>

    <input type="checkbox" value="red"> 赤
    <input type="checkbox" value="blue"> 青
    <input type="checkbox" value="yellow"> 黄
    <button id="button6">Add</button>
    <ul></ul>

    <button id="button7">addEventListener</button>

    <script src="{{ asset('js/dotinstall/js_dom/main.js') }}"></script>
</body>
</html>
