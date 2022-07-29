<?php
session_start();
$username  = $_SESSION['username'];
echo $username = $_SESSION['username'];

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: sign-in.php");
    exit;
}
?>

<?php include "dashboard.html" ?>