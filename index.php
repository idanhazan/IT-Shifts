<?php
    session_start();

    if (!isset($_SESSION['ID']))
        header('Location: signin.php');
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="IT-Shifts management of TowerJazz">
        <meta name="keywords" content="IT,Shifts,TowerJazz">
        <meta name="author" content="Idan Hazan">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="manifest" href="manifest.json">
        <title>IT-Shifts</title>
    </head>
    <body>
        <?php
            echo 'Welcome back ' . $_SESSION['ID'] . ', Click <a href="signout.php">here</a> to sign out.' . PHP_EOL;
        ?>
    </body>
</html>
