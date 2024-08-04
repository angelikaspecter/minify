document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.querySelector('.btn--menu');
    const navList = document.querySelector('.nav__list');
    const navLinks = document.querySelectorAll('.nav__link');
    const contactLink = document.querySelector('.nav__link--contact');

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

    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navLinks.forEach(link => link.classList.remove('active'));
            this.classList.add('active');
        });
    });

    contactLink.addEventListener('click', function() {
        navLinks.forEach(link => link.classList.remove('active'));
        this.classList.add('active');
    });
});
