<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Impact' rel='stylesheet'>
    <title><?php echo"$title"; ?></title>
</head>
<body>
<nav>
        <div class="logo">
            <h2 class="logo-text">CarbSense</h2>
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="./index.php">Categories</a></li>
            <li><a href="./search.php">Search</a></li>
            <li><button class="login-button" href="#">Login</button></li>
        </ul>
    </nav>
    <header>
        <h1><?php echo"$header"; ?></h1>
        <h2><?php echo"$headerText"; ?></h2>