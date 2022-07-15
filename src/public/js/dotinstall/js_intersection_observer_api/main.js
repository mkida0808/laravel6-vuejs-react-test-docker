'use strict';

{
    // Intersection Observer APIのデフォルト処理
    const target = document.querySelector('img');

    const observer = new IntersectionObserver((entries) => {
        console.log(entries);
    },
    {
        threshold: 0.2,
    });

    observer.observe(target);
}
