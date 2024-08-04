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
    $page = $_GET['page'];

    if (!isset($page)) {
        require ('templates/main.php');
    } elseif ($page == 'about') {
        require ('templates/about.php');
    } elseif ($page == 'portfolio') {
        require ('templates/portfolio.php');
    } else {
        require('templates/404.php');
    }
    ?>
    <?php
    require ('templates/footer.php')
        ?>
    <script src="js/header.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/hidehref.js"></script>
</body>

</html>