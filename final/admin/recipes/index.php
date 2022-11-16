<?php
include_once __DIR__ . '/../../app.php';
$title = "Recipes";
$header = "";
$headerText = "";
include_once __DIR__ . '/../../_components/header.php';
include_once __DIR__ . '/../../_includes/recipe-functions.php';
$recipes = get_recipe();
?>

        <h1>Recipes</h1>
        <p >A list of all the recipes in your account including their title, calories, cook time
          and overview.</p>

        <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
          }

        ?>

      <div>
        <button type="button">
          <a href="../../admin/recipes/create.php">
            Add recipe</a></button>
      </div>

        <div>
        <?php include __DIR__ . '/../../_components/table-recipes.php'; ?>
        </div>



<?php include_once __DIR__ . '/../../_components/footer.php';