<?php

session_start();

include "config.php";

$email = $_POST['email'];

$password = $_POST['password'];

$query =
"SELECT * FROM students
 WHERE email='$email'";

$result =
mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1)
{
    $student =
    mysqli_fetch_assoc($result);

    if(password_verify(
        $password,
        $student['password']
    ))
    {
        $_SESSION['student_id']
        = $student['id'];

        $_SESSION['student_name']
        = $student['name'];

        header(
        "Location: ../student/student_dashboard.php"
        );

        exit();
    }
}

$_SESSION['error'] =
"Invalid Email or Password";

header(
"Location: ../student/student.php"
);

exit();

?>