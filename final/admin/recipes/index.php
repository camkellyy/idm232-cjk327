<?php
include_once __DIR__ . '/../../app.php';
$title = "Recipes";
$header = "ALL RECIPES";
$headerText = "";
include_once __DIR__ . '/../../_components/admin-header.php';
include_once __DIR__ . '/../../_includes/recipe-functions.php';
$recipes = get_recipe();
?>

        <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p>' . $_GET['error'] . '</p>';
          }

        ?>

      <div>
        <button class="admin-buttons" type="button"><a href="../../admin/recipes/create.php">ADD RECIPE</a></button>
      </div>
    </div>


        <div>
        <?php include __DIR__ . '/../../_components/table-recipes.php'; ?>
        </div>
  </header>


<?php include_once __DIR__ . '/../../_components/footer.php';