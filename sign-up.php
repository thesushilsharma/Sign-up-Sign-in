<?php

if (isset($_POST['name'])) {
    include "config.php";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $phone = $_POST['phone'];
    $studentid = $_POST['studentid'];

    $sql = "INSERT INTO `sushil`.`sharma` (`name`, `age`, `gender`, `email`, `username`, `password`, `password_confirm`, `phone`, `studentid`, `date`)
     VALUES ('$name', '$age', '$gender', '$email','$username', '$password', '$password_confirm', '$phone', '$studentid', current_timestamp());";

    if ($con->query($sql) === true) {
        // echo "Successfully inserted";
        header("location:thank-you.html");
        // Flag for successful insertion

    } else {
        echo "Could not connect: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<?php include "sign-up.html" ?>