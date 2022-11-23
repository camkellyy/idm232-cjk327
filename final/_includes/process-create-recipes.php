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

// Create a SQL statement to insert the data into the database
$query = "INSERT INTO recipes (title, cal, cooktime, overview) VALUES ('$title_value', '$cal_value', '$time_value', '$overview_value')";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'User was not updated';
    redirect_to('/admin/recipes?error=' . $error_message);
}