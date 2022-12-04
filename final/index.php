<?php
include_once __DIR__ . '/app.php';
$title = "Home";
$header = "CarbSense";
$headerText = "CarbSense is health focused and provides you with recipes that are not only good for you, but taste delicious too! Browse the Recipe and Search page to find meals you love!";
include_once __DIR__ . '/_components/header.php';
include_once __DIR__ . '/_includes/recipe-functions.php';
$recipes = get_recipe();
?>

    </header>


<?php include_once __DIR__ . '/_components/footer.php';