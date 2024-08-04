document.addEventListener('DOMContentLoaded', function () {
    // Получаем все якорные ссылки на странице
    var anchorLinks = document.querySelectorAll('a[href^="#"]');

    // Функция для плавной прокрутки к якорю
    function smoothScroll(event) {
        event.preventDefault();

        var targetId = this.getAttribute('href').substring(1);
        var targetElement = document.getElementById(targetId);

        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });

            // Изменяем адресную строку без перезагрузки страницы
            history.pushState(null, '', window.location.pathname);
        }
    }

    // Добавляем обработчик событий для всех якорных ссылок
    anchorLinks.forEach(function (link) {
        link.addEventListener('click', smoothScroll);
    });
});