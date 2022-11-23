<?php

include_once __DIR__ . '/../../app.php';
$title = "Add Recipe";
$header = "ADD RECIPE";
$headerText = "";
include_once __DIR__ . '/../../_components/admin-header.php';
?>

<?php
// get users data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>
</header>

    <form class="create-form" action="../../_includes/process-create-recipes.php" method="POST">
        <div class="block">
        <label class="create-header" for="">Title</label>
        <input class="create-field-input" type="text" name="title">
        </div>

        <div class="block">
        <label class="create-header" for="">Calories</label>
        <input class="create-field-input" type="text" name="cal">
        </div>


        <div class="block">
        <label class="create-header" for="">Time</label>
        <input class="create-field-input" type="text" name="cookTime">
        </div>

        <div class="block">
        <label class="create-header" for="">Overview</label>
        <textarea class="create-field" name="overview" id="" cols="30" rows="10"></textarea>
        </div>

        <input class="submit-buttons" type="submit" value="SUBMIT">
    </form>


<?php include_once __DIR__ . '/../../_components/footer.php';