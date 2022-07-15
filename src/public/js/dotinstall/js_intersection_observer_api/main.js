'use strict';

{
    // Intersection Observer APIのデフォルト処理
    const target = document.querySelector('img');

    const observer = new IntersectionObserver((entries, obs) => {
        console.log(entries[0]);
        // entries[0].isIntersecting ? entries[0].target.classList.add('appear') : entries[0].target.classList.remove('appear');
        if (!entries[0].isIntersecting) {
            return ;
        }
            entries[0].target.classList.add('appear');
            obs.unobserve(entries[0].target);
    },
    {
        threshold: 0.2,
        // threshold: 1,
        // rootMargin: '0px 0px -100px',
    });

    observer.observe(target);
}
