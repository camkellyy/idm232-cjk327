<?php

/**
 * get all users from the database
 * @return object - mysqli_result
 */
function get_recipe()
{
    global $db_connection;
    $query = 'SELECT * FROM recipes ORDER BY title ASC';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Insert a user into the database
 * @param  string $first_name - first name of the user
 * @param  string $last_name - last name of the user
 * @param  string $email - email of the user
 * @param  string $phone - phone number of the user
 * @return object - mysqli_result
 */
function add_recipe($title_value, $cal_value, $time_value, $overview_value, $image_value)
{
    global $db_connection;
    $query = 'INSERT INTO recipes';
    $query .= ' (title, cal, cooktime, overview, imagePath)';
    $query .= " VALUES ('$title_value', '$cal_value', '$time_value', '$overview_value', '$image_value')";
    
    var_dump($query);
    die();

    $result = mysqli_query($db_connection, $query);
    return $result;
}