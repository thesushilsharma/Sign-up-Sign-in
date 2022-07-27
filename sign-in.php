<?php
if (isset($_POST['btnLogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "sharma" && $password == "sushil") {
        
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location: dashboard.php");
    } 
    else {
        echo "<script type='text/javascript'>alert('Enter Valid Username and Password');</script>";
    }
}
?>
<?php include "sign-in.html" ?>