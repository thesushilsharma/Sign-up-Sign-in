<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'config.php';
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "Select * from sushil.sharma where username='$username'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: dashboard.php");
            } else {
                echo "<script type='text/javascript'>alert('Enter Valid Username and Password');</script>";
            }
        }
    } else {
        echo "<script type='text/javascript'>alert('Enter Valid Username and Password');</script>";
    }
}
?>
<?php include "sign-in.html" ?>