<section class="section section--content portfolio">
    <header class="portfolio__header">
        <h2 class="title title--secondary title--semibold title--dark">Recent Projects</h2>
        <a href="index.php?page=portfolio" class="btn btn--primary <?php echo $hideButtonClass; ?>">
            <span class="desc desc--bold desc--light desc--normal">View More</span>
        </a>
    </header>
    <footer class="portfolio__footer">
        <ul class="portfolio__list">
            <?php foreach ($projects as $project): ?>
            <li class="portfolio__item">
                <div class="card">
                    <header class="card__header">
                        <img src="<?php echo $project['img']; ?>" width="540" height="380" alt="<?php echo $project['title']; ?> thumnbnail" class="img">
                    </header>
                    <footer class="card__footer">
                        <h3 class="title title--thirdly title--semibold title--dark"><?php echo $project['title']; ?></h3>
                        <div class="card__footer--wrap">
                            <p class="desc desc--medium desc--normal desc--dark"><img src="img/layers.svg" width="16"
                                    height="16" alt="View Study Case" class="icon icon--small"> View Study Case</p>
                            <p class="desc desc--medium desc--normal desc--dark"><img src="img/show.svg" width="16"
                                    height="16" alt="View Study Case" class="icon icon--small"> Live Preview</p>
                        </div>
                    </footer>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
        <a href="index.php?page=portfolio" class="btn btn--primary">
            <span class="desc desc--bold desc--light desc--normal">View More</span>
        </a>
    </footer>
</section>