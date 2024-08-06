<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arlene Ray</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>

<body>
    <?php
    require ('templates/header.php')
        ?>
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'main';

    $projects = [
        [
            'id' => 1,
            'title' => 'Keeper - Soccer Site',
            'img' => 'img/img_6.webp'
        ],
        [
            'id' => 2,
            'title' => 'Lumy - Dashboard UI Kit',
            'img' => 'img/img_5.webp'
        ],
        [
            'id' => 3,
            'title' => 'Ant - Personal Portofolio',
            'img' => 'img/img_4.webp'
        ],
        [
            'id' => 4,
            'title' => 'Minify - Web Design',
            'img' => 'img/img_3.webp'
        ]
    ];

    $hires = [
        [
            'id' => 1,
            'img' => 'img/img_7.webp',
            'title' => 'Communicative',
            'desc' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.'
        ],
        [
            'id' => 2,
            'img' => 'img/img_8.webp',
            'title' => 'Professional',
            'desc' => 'Elit id morbi senectus feugiat nulla justo erat aliquam tincidunt.'
        ],
        [
            'id' => 3,
            'img' => 'img/img_9.webp',
            'title' => 'Collaborative​',
            'desc' => 'Feugiat lectus ac dis nullam pellentesque pellentesque turpis cras.'
        ],
        [
            'id' => 4,
            'img' => 'img/img_10.webp',
            'title' => 'Client’s Favourite',
            'desc' => 'Scelerisque auctor ultrices id phasellus integer egestas et malesuada id.'
        ]
    ];

    $reviews = [
        [
            'id' => '1',
            'desc' => 'One of the best additions to our feedback loop has been the company-wide adoption of Fellow.',
            'avatar' => 'img/user_1.webp',
            'name' => 'Ronald Richards',
            'job' => 'UI/UX Designer',
            'rate' => '4.5',
            '1st' => 'img/star-fill.svg',
            '2nd' => 'img/star-fill.svg',
            '3rd' => 'img/star-fill.svg',
            '4th' => 'img/star-fill.svg',
            '5th' => 'img/star-part.svg'
        ],
        [
            'id' => '2',
            'desc' => 'It provides an amazing platform for constant conversations and direct feedback between managers and direct reports.',
            'avatar' => 'img/user_2.webp',
            'name' => 'Ronald Richards',
            'job' => 'UI/UX Designer',
            'rate' => '5',
            '1st' => 'img/star-fill.svg',
            '2nd' => 'img/star-fill.svg',
            '3rd' => 'img/star-fill.svg',
            '4th' => 'img/star-fill.svg',
            '5th' => 'img/star-fill.svg'
        ],
        [
            'id' => '3',
            'desc' => 'One of the best additions to our feedback loop has been the company-wide adoption of Fellow.',
            'avatar' => 'img/user_1.webp',
            'name' => 'Ronald Richards',
            'job' => 'UI/UX Designer',
            'rate' => '4',
            '1st' => 'img/star-fill.svg',
            '2nd' => 'img/star-fill.svg',
            '3rd' => 'img/star-fill.svg',
            '4th' => 'img/star-fill.svg',
            '5th' => 'img/star.svg'
        ],
        [
            'id' => '4',
            'desc' => 'It provides an amazing platform for constant conversations and direct feedback between managers and direct reports.',
            'avatar' => 'img/user_2.webp',
            'name' => 'Ronald Richards',
            'job' => 'UI/UX Designer',
            'rate' => '4.5',
            '1st' => 'img/star-fill.svg',
            '2nd' => 'img/star-fill.svg',
            '3rd' => 'img/star-fill.svg',
            '4th' => 'img/star-fill.svg',
            '5th' => 'img/star-part.svg'
        ],
        [
            'id' => '5',
            'desc' => 'One of the best additions to our feedback loop has been the company-wide adoption of Fellow.',
            'avatar' => 'img/user_1.webp',
            'name' => 'Ronald Richards',
            'job' => 'UI/UX Designer',
            'rate' => '4.5',
            '1st' => 'img/star-fill.svg',
            '2nd' => 'img/star-fill.svg',
            '3rd' => 'img/star-fill.svg',
            '4th' => 'img/star-fill.svg',
            '5th' => 'img/star-part.svg'
        ],
        [
            'id' => '6',
            'desc' => 'It provides an amazing platform for constant conversations and direct feedback between managers and direct reports.',
            'avatar' => 'img/user_2.webp',
            'name' => 'Ronald Richards',
            'job' => 'UI/UX Designer',
            'rate' => '5',
            '1st' => 'img/star-fill.svg',
            '2nd' => 'img/star-fill.svg',
            '3rd' => 'img/star-fill.svg',
            '4th' => 'img/star-fill.svg',
            '5th' => 'img/star-fill.svg'
        ],
    ];

    if ($page === 'portfolio') {
        $projects = array_reverse($projects);
        $hideButtonClass = 'hide';
    } else {
        $projects = array_slice($projects, -2);
        $projects = array_reverse($projects);
        $hideButtonClass = '';
    }

    $page = $_GET['page'];

    if (!isset($page)) {
        require ('templates/main.php');
    } elseif ($page == 'about') {
        require ('templates/about.php');
    } elseif ($page == 'portfolio') {
        require ('templates/portfolio.php');
    } else {
        require ('templates/404.php');
    }
    ?>
    <?php
    require ('templates/footer.php')
        ?>
    <script src="js/header.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/hidehref.js"></script>
    <script src="js/expanded-text.js"></script>
    <script src="js/reviews.js"></script>
</body>

</html>