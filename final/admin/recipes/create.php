<?php

include_once __DIR__ . '/../../app.php';
$title = "Create Recipes";
$header = "";
$headerText = "";
include_once __DIR__ . '/../../_components/header.php';
?>

<?php
// get users data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>

    <form action="../../_includes/process-create-recipes.php" method="POST">
        <div class="block">
        <label for="">Title</label>
        <input type="text" name="title">
        </div>

        <div class="block">
        <label for="">Calories</label>
        <input type="text" name="cal">
        </div>


        <div class="block">
        <label for="">Time</label>
        <input type="text" name="cookTime">
        </div>

        <div class="block">
        <label for="">Overview</label>
        <input type="text" name="overview">
        </div>

        <input type="submit" value="submit">
    </form>


<?php include_once __DIR__ . '/../../_components/footer.php';