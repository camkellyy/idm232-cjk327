<?php
if (!isset($recipes)) {
    echo '$recipe variable is not defined. Please check the code.';
}
?>

    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
        echo "
        <div class='recipe-container'>
          <div class='recipe-row'>
              <div class='recipe'>
                  <a href='details.php?id={$recipe['id']}'><img src='dist/images/asian-salad.png' alt='Asian Salad' class='recipe-img'></a>
                  <div class='top-line'>
                      <h3>{$recipe['title']}</h4>
                      <p>{$recipe['cal']} cals.</p>
                  </div>
                  <p>Cook Time . . . . . . . . . . . . . . . . . . . . . . . {$recipe['cookTime']} mins</p>
              </div>
          </div>
        </div>
        ";
    }
?>