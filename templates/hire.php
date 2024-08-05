<section class="section section--content hire">
    <h2 class="title title--secondary title--semibold title--dark title--center">Why Hire Me?</h2>
    <ul class="hire__list">
        <?php foreach ($hires as $hire): ?>
            <li class="hire__item">
                <div class="card">
                    <header class="card__header">
                        <img src="<?php echo $hire['img']; ?>" width="240" height="313" alt="<?php echo $hire['title']; ?>"
                            class="img">
                    </header>
                    <footer class="card__footer">
                        <h3 class="title title--thirdly title--medium title--dark title--center">
                            <?php echo $hire['title']; ?>
                        </h3>
                        <div class="card__footer--wrap">
                            <p class="desc desc--regular desc--normal desc--middle desc--center">
                                <?php echo $hire['desc']; ?>
                            </p>
                        </div>
                    </footer>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</section>