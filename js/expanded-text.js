document.addEventListener('DOMContentLoaded', function () {
    const paragraphs = document.querySelectorAll('.reviews__desc p.desc');

    paragraphs.forEach(paragraph => {
        paragraph.addEventListener('click', function () {
            if (this.classList.contains('expanded')) {
                this.classList.remove('expanded');
                this.style.webkitLineClamp = 3;
            } else {
                this.classList.add('expanded');
                this.style.webkitLineClamp = 'unset';
            }
        });
    });
});
