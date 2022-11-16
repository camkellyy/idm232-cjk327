<?php

include_once __DIR__ . '/../../app.php';
$title = "Edit Recipes";
$header = "";
$headerText = "";
include_once __DIR__ . '/../../_components/header.php';
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
        <h1>Edit Recipe</h1>
        <form action="../../_includes/process-edit-recipes.php" method="POST">
            <div>
                <label for="">Title</label>
                <input type="text" name="title" value="<?php echo $recipe['title']?>">
            </div>

            <div>
                <label for="">Calories</label>
                <input type="text" name="cal" value="<?php echo $recipe['cal']?>">
            </div>

            <div>
                <label for="">Cook Time</label>
                <input type="text" name="cookTime" value="<?php echo $recipe['cookTime']?>">
            </div>

            <div>
                <label for="">Overview</label>
                <input type="text" name="overview" value="<?php echo $recipe['overview']?>">
            </div>

              <input type="submit" value="Submit">

              <input type="hidden" name="id" value="<?php echo $recipe['id']?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';