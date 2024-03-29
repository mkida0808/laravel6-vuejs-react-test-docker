'use strict';

{
    // 要素の操作
    // function update() {
    //     document.querySelector('h1').textContent = 'Changed!';
    // }
    // setTimeout(() => {
        // document.querySelector('h1').textContent = 'H1 Changed!';
        // document.querySelector('#target').textContent = 'H1 Changed!';
        // document.getElementById('target').textContent = 'Changed!';
        // document.querySelector('p').textContent = 'Changed!';
        // document.querySelectorAll('p')[2].textContent = 'Changed!';
    //     document.querySelectorAll('p').forEach((p, index) => {
    //         p.textContent = `${index}番目の<p>`;
    //     });
    // }, 1000);

    document.querySelector('button').addEventListener('click', () => {
        const targetNode = document.getElementById('target');
        // targetNode.textContent = 'Changed! by button tag';
        targetNode.textContent = targetNode.dataset.translation;

        targetNode.title = 'This is title!';
        // targetNode.style.color = 'red';
        // targetNode.style.backgroundColor = 'skyblue';
        // targetNode.className = 'my-color my-border';
        // targetNode.classList.add('my-color');
        // targetNode.classList.contains('my-color') ? targetNode.classList.remove('my-color') : targetNode.classList.add('my-color');
        // targetNode.classList.toggle('my-color');
    });

    // DOMによる要素の追加
    // document.getElementById('button2').addEventListener('click', () => {
    //     const item2 = document.createElement('li');
    //     item2.textContent = 'item 2';

    //     const ul = document.querySelector('ul');
    //     ul.appendChild(item2);
    // });

    // DOMによる要素の複製、挿入
    // document.getElementById('button2').addEventListener('click', () => {
    //     const item0 = document.querySelectorAll('li')[0];
    //     const copy = item0.cloneNode(true);

    //     const ul = document.querySelector('ul');
    //     const item2 = document.querySelectorAll('li')[2];
    //     ul.insertBefore(copy, item2);
    // });

    // DOMによる要素の削除
    // document.getElementById('button2').addEventListener('click', () => {
    //     const item1 = document.querySelectorAll('li')[1];
    //     // item1.remove(); // 古いブラウザでは使えない可能性あり
    //     document.querySelector('ul').removeChild(item1);
    // });

    // input要素の操作
    document.getElementById('button3').addEventListener('click', () => {
        const li = document.createElement('li');
        const text = document.querySelector('input');
        li.textContent = text.value;
        document.querySelector('ul').appendChild(li);
        text.value = '';
        text.focus();
    });

    // セレクトボックスの操作
    document.getElementById('button4').addEventListener('click', () => {
        const li = document.createElement('li');
        const color = document.querySelector('select');
        li.textContent = `${color.value} - ${color.selectedIndex}`;
        document.querySelector('ul').appendChild(li);
    });

    // ラジオボタンの操作
    document.getElementById('button5').addEventListener('click', () => {
        const colors = document.querySelectorAll('input');
        let selectedColor;

        colors.forEach(color => {
            if (color.checked) {
                selectedColor = color.value;
            }
        });
        const li = document.createElement('li');
        li.textContent = selectedColor;
        document.querySelector('ul').appendChild(li);
    });

    // チェックボタンの操作
    document.getElementById('button6').addEventListener('click', () => {
        const colors = document.querySelectorAll('input');
        const selectedColors = [];

        colors.forEach(color => {
            if (color.checked) {
                selectedColors.push(color.value);
            }
        });
        const li = document.createElement('li');
        // li.textContent = selectedColors.join(',');
        li.textContent = selectedColors;
        document.querySelector('ul').appendChild(li);
    });

    // その他のイベントの挙動（addEventListener）
    document.getElementById('button7').addEventListener('dblclick', () => {
        console.log('Double Clicked!');
    });

    document.getElementById('button7').addEventListener('mousemove', () => {
    // document.addEventListener('mousemove', () => {
        console.log('mousemoved!');
    });

    // document.addEventListener('mousemove', e => {
    //     console.log(e.clientX, e.ClientY);
    // });

    // document.addEventListener('keydown', e => {
    //     console.log(e.key);
    // });

    // フォームで使われる様々なイベント
    const text = document.querySelector('textarea');
    text.addEventListener('focus', () => {
        console.log('focus');
    });
    text.addEventListener('blur', () => {
        console.log('blur');
    });
    text.addEventListener('input', () => {
        console.log('input');
        console.log(text.value.length);
    });
    text.addEventListener('change', () => {
        console.log('change');
    });

    // フォームの送信
    // document.querySelector('form').addEventListener('submit', () => {
    //     console.log('submit');
    // });
    document.querySelector('form').addEventListener('submit', (e) => {
        e.preventDefault();
        console.log('submit');
    });

    // イベントの伝播
    document.getElementById('ul').addEventListener('click', e => {
        if (e.target.nodeName === 'LI') {
            e.target.classList.toggle('done');
        }
    });
}
