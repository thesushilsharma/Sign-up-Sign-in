<?php
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
// $dbname = "sushil"; /* Database name */

$con = mysqli_connect($host, $user, $password);
// Check connection

if (!$con) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
// sql query to create database and table
$query_file = 'database.sql';

$file = fopen($query_file, 'r');
$sql = fread($file, filesize($query_file));
fclose($file);

if ($con->multi_query($sql) === TRUE) {
    while (mysqli_next_result($con)) {;
    }
} else {
    echo "Error creating table: " . $con->error;
}
