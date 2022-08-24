<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        function doAction() {
            var id = document.querySelector('#id').value;
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/laravel6advancedshoda/hello/json/' + id, true);
            xhr.responseType = 'json';
            xhr.onload = function(e) {
                console.log(1);
                if (this.status == 200) {
                    var result = this.response;
                    document.querySelector('#name').textContent = result.name;
                    document.querySelector('#mail').textContent = result.mail;
                    document.querySelector('#age').textContent = result.age;
                }
            };
            xhr.send();
        }
    </script>
</head>
<body>
    <h1>Hello/Index</h1>
    <div>
        <input type="number" id="id" value="1">
        <button onclick="doAction();">Click</button>
    </div>
    <ul>
        <li id="name"></li>
        <li id="mail"></li>
        <li id="age"></li>
    </ul>
</body>
</html>
