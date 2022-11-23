<?php
if (!isset($recipes)) {
    echo '$recipe variable is not defined. Please check the code.';
}
?>
<table>
  <thead>
    <tr class="table-row-header">
      <!-- <td class="table-header" scope="col">ID</td> -->
      <td class="table-header table-title" scope="col">Title</td>
      <td class="table-header table-nums" scope="col">Calories</td>
      <td class="table-header table-nums" scope="col">Time</td>
      <!-- <td class="table-header" scope="col"><span>Overview</span></td> -->
    </tr>
  </thead>
  <tbody>
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
        echo "
          <tr class='table-row'>
          <!-- <td>{$recipe['id']}</td> -->
            <td>{$recipe['title']}</td>
            <td class='table-nums'>{$recipe['cal']}</td>
            <td class='table-nums'>{$recipe['cookTime']}</td>
          <!-- <td>{$recipe['overview']}</td> -->
            <td class='table-buttons'>
              <a href='../../admin/recipes/edit.php?id={$recipe['id']}'><img class='edit-img' src='<?php echo site_url(); ?>/dist/images/edit.png'></a>
              <a href='../../admin/recipes/delete.php?id={$recipe['id']}'><img class='delete-img' src='<?php echo site_url(); ?>/dist/images/delete.png'></a>
            </td>
          </tr>";
    }
?>
  </tbody>
</table>