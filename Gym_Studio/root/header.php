<?php
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>MNT Gym Studio</title>

        <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/font-awesone/css/fontawesome-all.min.css">

        <link rel="shortcut icon" href="img/favicon.ico">

        <link rel="stylesheet" href="css/owlcarousel/owl.carousel.min.css">

        <link rel="stylesheet" href="css/owlcarousel/owl.theme.default.min.css">

        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" href="css/responsive.css">
    </head>

    <body>

        <nav>
            <div class="logo">
                <a href="index.php"><h2>MNT Gym</h2></a>
            </div>
            <ul class="nav-links">
                <?php
                        if(isset($_SESSION['user']))
                        {
                    ?>
                            <li><a>Welcome <?php echo $_SESSION['user'] ?></a></li>
                            <li><a href="trainers-form.php">CREATE TRAINER</a></li>
                            <li><a href="">CLASSES</a></li>
                            <li><a href="trainers.php">TRAINER</a></li>
                            <li><a href="">GALLERY</a></li>
                            <li><a><form action="logout.php" method="post">
                                <button type="submit" name="submit">LOGOUT</button></form></a></li>
                    <?php
                        }
                        else
                        {
                    ?>
                            <li><a href="">CLASSES</a></li>
                            <li><a href="trainers.php">TRAINER</a></li>
                            <li><a href="">GALLERY</a></li>
                            <li><a href="login-form.php">LOGIN</a></li>
                            <li><a href="">SIGNUP</a></li>
                    <?php
                        }
                    ?>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>

