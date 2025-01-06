<?php

if (isset($_SERVER['HTTP_HX_REQUEST']) && $_SERVER['HTTP_HX_REQUEST'] == 'true') {
    if ($slots) {
        echo $slot;
    }
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=k, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <?= css('assets/css/main.css') ?>
</head>

<body>