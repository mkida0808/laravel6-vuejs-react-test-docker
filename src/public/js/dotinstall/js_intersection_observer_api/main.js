'use strict';

{
    // Intersection Observer APIのデフォルト処理
    const targets = document.querySelectorAll('img');

    const observer = new IntersectionObserver((entries, obs) => {
        console.log(entries);
        // entries[0].isIntersecting ? entries[0].target.classList.add('appear') : entries[0].target.classList.remove('appear');
        entries.forEach (entry => {
            if (!entry.isIntersecting) {
                return ;
            }
                entry.target.classList.add('appear');
                obs.unobserve(entry.target);
        });

    },
    {
        threshold: 0.2,
        // threshold: 1,
        // rootMargin: '0px 0px -100px',
    });

    targets.forEach(target => {
        observer.observe(target);
    });
}
