<?php

session_start();

include "config.php";

$email = $_POST['email'];

$password = $_POST['password'];

$query = "SELECT * FROM teachers WHERE email='$email'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1)
{
    $teacher = mysqli_fetch_assoc($result);

    if(password_verify($password, $teacher['password']))
    {
        $_SESSION['teacher_id'] = $teacher['id'];

        $_SESSION['teacher_name'] = $teacher['name'];

        header("Location: ../teacher/teacher_dashboard.php");

        exit();
    }
}

$_SESSION['error'] = "Invalid Email or Password";

header("Location: ../teacher/portal.php");

exit();

?>