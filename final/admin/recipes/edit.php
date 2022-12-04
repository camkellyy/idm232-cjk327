<?php

include_once __DIR__ . '/../../app.php';
$title = "Edit Recipe";
$header = "EDIT RECIPE";
$headerText = "";
include_once __DIR__ . '/../../_components/admin-header.php';
?>

<?php
// get users data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $user variable;
    $recipe = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}

?>
</header>
        <form class="create-form" action="<?php echo site_url(); ?>/_includes/process-edit-recipes.php" method="POST">
            <div class="block">
                <label class="create-header" for="">Title</label>
                <input class="create-field-input" type="text" name="title" value="<?php echo $recipe['title']?>">
            </div>

            <div class="block">
                <label class="create-header" for="">Calories</label>
                <input class="create-field-input" type="text" name="cal" value="<?php echo $recipe['cal']?>">
            </div>

            <div class="block">
                <label class="create-header" for="">Cook Time</label>
                <input class="create-field-input" type="text" name="cookTime" value="<?php echo $recipe['cookTime']?>">
            </div>

            <div class="block">
                <label class="create-header" for="">Image</label>
                <input class="create-field-input" type="text" name="imagePath" value="<?php echo $recipe['imagePath']?>">
            </div>

            <div class="block">
                <label class="create-header" for="">Overview</label>
                <textarea class="create-field" type="text" name="overview" id="" cols="30" rows="10"><?php echo $recipe['overview']?></textarea>
            </div>

            <div class="block">
                <label class="create-header" for="">Ingredients</label>
                <textarea class="create-field" type="text" name="ingredients" id="" cols="30" rows="10"><?php echo $recipe['ingredients']?></textarea>
            </div>

            <div class="block">
                <label class="create-header" for="">Recipe Steps</label>
                <textarea class="create-field" type="text" name="steps" id="" cols="30" rows="10"><?php echo $recipe['steps']?></textarea>
            </div>

              <input class="submit-buttons" type="submit" value="SUBMIT">

              <input type="hidden" name="id" value="<?php echo $recipe['id']?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';