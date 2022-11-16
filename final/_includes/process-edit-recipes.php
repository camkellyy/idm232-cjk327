<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$title_value = $_POST['title'];
$cal_value = $_POST['cal'];
$time_value = $_POST['cookTime'];
$overview_value = $_POST['overview'];
$id_value = $_POST['id'];

// Create a SQL statement to insert the data into the database
$query = "UPDATE recipes SET title = '{$title_value}', cal = '{$cal_value}', cooktime = '{$time_value}', overview = '{$overview_value}' WHERE id = {$id_value}";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('../../final/admin/recipes');
} else {
    $error_message = 'User was not updated';
    redirect_to('/admin/recipes?error=' . $error_message);
}