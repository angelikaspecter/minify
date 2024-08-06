<section class="section section--content reviews">
    <h2 class="title title--secondary title--semibold title--light">We Are Loved By Users <br> And Clients Worldwide</h2>
    <ul class="reviews__list">
        <?php foreach ($reviews as $index => $review): ?>
            <li class="reviews__item">
                <div class="reviews__card">
                    <div class="reviews__desc">
                        <p class="desc desc--extralarge desc--regular desc--dark">
                            <?php echo $review['desc']; ?>
                        </p>
                    </div>
                    <footer class="reviews__card--footer">
                        <div class="reviews__card--content">
                            <div class="reviews__card--wrap">
                                <div class="reviews__card--avatar">
                                    <img src="<?php echo $review['avatar']; ?>" alt="" class="img">
                                </div>
                                <div class="reviews__card--column">
                                    <cite class="desc desc--semibold desc--normal desc--dark desc--style">
                                        <?php echo $review['name']; ?>
                                    </cite>
                                    <p class="desc desc--extrasmall desc--regular desc--middle">
                                        <?php echo $review['job']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="reviews__card--wrap rate">
                                <p class="desc desc--semibold desc--normal desc--dark">
                                    <?php echo $review['rate']; ?>
                                </p>
                                <div class="reviews__card--row">
                                    <img src="<?php echo $review['1st']; ?>" alt="1st star" class="icon icon--small">
                                    <img src="<?php echo $review['2nd']; ?>" alt="2nd star" class="icon icon--small">
                                    <img src="<?php echo $review['3rd']; ?>" alt="3rd star" class="icon icon--small">
                                    <img src="<?php echo $review['4th']; ?>" alt="4th star" class="icon icon--small">
                                    <img src="<?php echo $review['5th']; ?>" alt="5th star" class="icon icon--small">
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="reviews__control">
        <?php for ($i = 0; $i < ceil(count($reviews) / 2); $i++): ?>
            <span class="dot <?php echo $i === 0 ? 'active' : ''; ?>" data-index="<?php echo $i; ?>"></span>
        <?php endfor; ?>
    </div>
</section>
