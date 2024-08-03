document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.querySelector('.btn--menu');
    const navList = document.querySelector('.nav__list');

    menuButton.addEventListener('click', function() {
        navList.classList.toggle('hide');
        menuButton.classList.toggle('active');
    });

    document.addEventListener('click', function(event) {
        if (!navList.contains(event.target) && !menuButton.contains(event.target)) {
            navList.classList.add('hide');
            menuButton.classList.remove('active');
        }
    });
});