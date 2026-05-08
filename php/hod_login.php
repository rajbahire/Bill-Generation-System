<?php

session_start();

include "config.php";

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$query = "SELECT * FROM hod_users WHERE email='$email'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0)
{
    $hod = mysqli_fetch_assoc($result);

    if($password == "admin123")
    {
        $_SESSION['hod_id'] = $hod['id'];

        $_SESSION['hod_name'] = $hod['name'];

        header("Location: ../hod/hod_dashboard.php");

        exit();
    }
}

$_SESSION['error'] = "Invalid Email or Password";

header("Location: ../hod/hod.php");

exit();

?>