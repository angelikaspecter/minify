<header class="section section--header header" id="header">
    <nav class="nav">
        <a href="/" class="nav__logo">
            <img src="img/logo.svg" width="121" height="33" alt="" class="logo logo--header">
        </a>
        <ul class="nav__list hide">
            <li class="nav__item">
                <a href="/" class="nav__link <?php echo (!isset($_GET['page']) || $_GET['page'] == '') ? 'active' : ''; ?>">
                    <span class="desc desc--normal desc--bold desc--dark">Home</span>
                </a>
            </li>
            <li class="nav__item">
                <a href="index.php?page=about" class="nav__link <?php echo (isset($_GET['page']) && $_GET['page'] == 'about') ? 'active' : ''; ?>">
                    <span class="desc desc--normal desc--bold desc--dark">About</span>
                </a>
            </li>
            <li class="nav__item">
                <a href="index.php?page=portfolio" class="nav__link <?php echo (isset($_GET['page']) && $_GET['page'] == 'portfolio') ? 'active' : ''; ?>">
                    <span class="desc desc--normal desc--bold desc--dark">Portfolio</span>
                </a>
            </li>
            <li class="nav__item">
                <a href="#footer" class="nav__link nav__link--contact">
                    <span class="desc desc--normal desc--bold desc--dark">Contact</span>
                </a>
            </li>
        </ul>
        <button class="nav__btn btn btn--menu"></button>
    </nav>
</header>