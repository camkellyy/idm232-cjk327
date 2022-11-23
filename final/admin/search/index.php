<?php
include_once __DIR__ . '/../../app.php';
$title = "Search";
$header = "Search";
$headerText = "Search through our delicious and health concious recipes!";
include_once __DIR__ . '/../../_components/header.php';
include_once __DIR__ . '/../../_includes/recipe-functions.php';
$recipes = get_recipe();

// Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}

$query = 'SELECT *';
$query .= ' FROM recipes';
$query .= " WHERE title LIKE '%{$search}%'";
$query .= " OR cal LIKE '%{$search}%'";
$query .= " OR cookTime LIKE '%{$search}%'";
$query .= " OR overview LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);

// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
    $recipe_results = true;
} else {
    $recipe_results = false;
}

?>

    <div class="search">
        <form class="search-form" action="<?php echo site_url(); ?>/admin/search" method="GET">
          <input class="search-field" type="text" name="search" id="search" placeholder="Search" value="<?php echo $search; ?>">
          <button class="search-button" type="submit"><img class="search-img" src="<?php echo site_url(); ?>/dist/images/submit.png"></button>
        </form>
    </div>

        </header>

        <div class="search-text">
            <h2>You searched for "<?php echo $search; ?>"</h2>
        </div>
        
        <?php
        // If no results, echo no results
        if (!$recipe_results) {
            echo '<p>No results found</p>';
        }
        ?>


        <?php
        // If error query param exist, show error message
        if (isset($_GET['error'])) {
            echo '<p>' . $_GET['error'] . '</p>';
        }
        ?>

    <?php
    // If we have results, show them
      if ($recipe_results) {
          while ($recipe_results = mysqli_fetch_assoc($results)) {
            echo "
            <div class='recipe-container'>
              <div class='recipe-row'>
                  <div class='recipe'>
                      <a href='../../details.php?id={$recipe_results['id']}'><img src='../../dist/images/asian-salad.png' alt='Asian Salad' class='recipe-img'></a>
                      <div class='top-line'>
                          <h3>{$recipe_results['title']}</h4>
                          <p>{$recipe_results['cal']} cals.</p>
                      </div>
                      <p>Cook Time . . . . . . . . . . . . . . . . . . . . . . . {$recipe_results['cookTime']} mins</p>
                  </div>
              </div>
            </div>
            ";
          }
      }
    ?>



<?php include_once __DIR__ . '/../../_components/footer.php';
?>