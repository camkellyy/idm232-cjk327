<?php
if (!isset($recipes)) {
    echo '$recipe variable is not defined. Please check the code.';
}
?>
<table>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Calories</th>
      <th scope="col">Cook Time</th>
      <th scope="col"><span>Overview</span></th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
        echo "
          <tr>
            <td>{$recipe['id']}</td>
            <td>{$recipe['title']}</td>
            <td>{$recipe['cal']}</td>
            <td>{$recipe['cookTime']}</td>
            <td>{$recipe['overview']}</td>
            <td>
              <a href='../../admin/recipes/edit.php?id={$recipe['id']}'>Edit</a>
              <a href='../../admin/recipes/delete.php?id={$recipe['id']}'>Delete</a>
            </td>
          </tr>";
    }
?>
  </tbody>
</table>