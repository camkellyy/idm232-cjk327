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
</div>
</header>

    <form class="create-form" action="<?php echo site_url(); ?>/_includes/process-create-recipes.php" method="POST">
        <div class="block">
        <label class="create-header">Title</label>
        <input class="create-field-input" type="text" name="title">
        </div>

        <div class="block">
        <label class="create-header">Calories</label>
        <input class="create-field-input" type="text" name="cal">
        </div>


        <div class="block">
        <label class="create-header">Time</label>
        <input class="create-field-input" type="text" name="cookTime">
        </div>

        <div class="block">
        <label class="create-header">Image</label>
        <input class="create-field-input" type="text" name="imagePath">
        </div>

        <div class="block">
        <label class="create-header">Overview</label>
        <textarea class="create-field" name="overview" cols="30" rows="10"></textarea>
        </div>

        <div class="block">
        <label class="create-header">Ingredients</label>
        <textarea class="create-field" name="ingredients" cols="30" rows="10"></textarea>
        </div>

        <div class="block">
        <label class="create-header">Recipe Steps</label>
        <textarea class="create-field" name="steps" cols="30" rows="10"></textarea>
        </div>

        <input class="submit-buttons" type="submit" value="SUBMIT">
    </form>


<?php include_once __DIR__ . '/../../_components/footer.php';