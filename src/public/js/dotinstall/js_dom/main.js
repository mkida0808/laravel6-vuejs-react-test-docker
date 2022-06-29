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
}
