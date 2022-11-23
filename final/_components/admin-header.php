<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Impact' rel='stylesheet'>
    <title><?php echo"$title"; ?></title>
</head>
<body>
<nav class="nav-admin">
        <div class="logo">
            <h2 class="logo-text">CarbSense</h2>
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="<?php echo site_url(); ?>/">Home</a></li>
            <li><a href="<?php echo site_url(); ?>/admin/search/">Search</a></li>
            <li><a href="<?php echo site_url(); ?>/admin/recipes/">Admin</a></li>
        </ul>
    </nav>
    <header class="header-admin">
        <div class="admin-header">
            <h1 class="admin-header-text"><?php echo"$header"; ?></h1>
            <h2 class="header-blurb"><?php echo"$headerText"; ?></h2>
    