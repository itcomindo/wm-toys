<?php

/**
 *
 * Silence is golden
 *@package bbb
 */

define('INCLUDE_ALLOWED', true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="app.css">
</head>

<body>

    <?php
    // call header.php from /templates/header.php
    require_once 'templates/header.php';
    require_once 'menu.php';
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="scripts.js"></script>
</body>

</html>