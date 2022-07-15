'use strict';

{
    // Intersection Observer APIのデフォルト処理
    const target = document.querySelector('img');

    const observer = new IntersectionObserver((entries) => {
        console.log(entries[0]);
        // entries[0].isIntersecting ? entries[0].target.classList.add('appear') : entries[0].target.classList.remove('appear');
        if (!entries[0].isIntersecting) {
            return ;
        } else {
            entries[0].target.classList.add('appear');
        }
    },
    {
        threshold: 1,
        rootMargin: '0px 0px -100px',
    });

    observer.observe(target);
}
