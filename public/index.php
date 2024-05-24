<?php

require_once('../config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once '../inc/head.php' ?>
    <title>Public</title>
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>

    <div class="container">
        <img src="src/img/logo.png" alt="Dragon Knowledge Logo" class="logo">
        <h1>Dragon Knowledge - <?=$dkf_version?></h1>
        <div class="buttons">
            <a href="https://github.com/KSInfinite/Dragon-Knowledge-Framework" class="btn">Github</a>
            <!-- <a href="" class="btn">Documentation</a> -->
        </div>
        <h2>URL : <?= $dkf_urlHTTP.$dkf_urlHOST ?></h2>
    </div>

</body>

</html>