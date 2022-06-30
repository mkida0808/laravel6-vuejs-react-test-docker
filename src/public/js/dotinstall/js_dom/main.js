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
    document.getElementById('button2').addEventListener('click', () => {
        const item0 = document.querySelectorAll('li')[0];
        const copy = item0.cloneNode(true);

        const ul = document.querySelector('ul');
        const item2 = document.querySelectorAll('li')[2];
        ul.insertBefore(copy, item2);
    });
}
