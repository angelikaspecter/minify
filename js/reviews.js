document.addEventListener('DOMContentLoaded', () => {
    const dots = document.querySelectorAll('.dot');
    const reviews = document.querySelectorAll('.reviews__item');
    let activeIndex = 0;

    const updateReviewsVisibility = (index) => {
        reviews.forEach((review, i) => {
            review.classList.remove('reviews__item--visible');
            if (window.innerWidth > 991.98) {
                if (i >= index * 2 && i < (index + 1) * 2) {
                    setTimeout(() => {
                        review.classList.add('reviews__item--visible');
                    }, 10);
                }
            } else {
                if (i === index) {
                    setTimeout(() => {
                        review.classList.add('reviews__item--visible');
                    }, 10);
                }
            }
        });
    };

    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            const index = parseInt(dot.getAttribute('data-index'));
            if (index === activeIndex) return;

            dots.forEach(d => d.classList.remove('active'));
            dot.classList.add('active');

            activeIndex = index;
            updateReviewsVisibility(index);
        });
    });

    // Initialize the first set of reviews as visible
    updateReviewsVisibility(activeIndex);

    // Swipe functionality for small screens
    let touchstartX = 0;
    let touchendX = 0;

    const handleSwipe = () => {
        if (touchendX < touchstartX) {
            activeIndex = (activeIndex + 1) % reviews.length;
        }
        if (touchendX > touchstartX) {
            activeIndex = (activeIndex - 1 + reviews.length) % reviews.length;
        }
        updateReviewsVisibility(activeIndex);
        dots.forEach((dot, index) => {
            if (index === Math.floor(activeIndex / 2)) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    };

    reviews.forEach(review => {
        review.addEventListener('touchstart', (e) => {
            touchstartX = e.changedTouches[0].screenX;
        });
        review.addEventListener('touchend', (e) => {
            touchendX = e.changedTouches[0].screenX;
            handleSwipe();
        });
    });

    // Update dots for smaller screens
    const updateDotsForSmallScreens = () => {
        if (window.innerWidth <= 991.98) {
            const control = document.querySelector('.reviews__control');
            control.innerHTML = '';
            for (let i = 0; i < reviews.length; i++) {
                const span = document.createElement('span');
                span.classList.add('dot');
                if (i === 0) span.classList.add('active');
                span.setAttribute('data-index', i);
                control.appendChild(span);
            }
        }
    };

    updateDotsForSmallScreens();
    window.addEventListener('resize', updateDotsForSmallScreens);
});
