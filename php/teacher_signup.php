<?php

session_start();

include "config.php";

$name = $_POST['name'];

$email = $_POST['email'];

$department = $_POST['department'];

$phone = $_POST['phone'];

$password =
password_hash(
$_POST['password'],
PASSWORD_DEFAULT
);

$check = mysqli_query(
$conn,
"SELECT * FROM teachers
 WHERE email='$email'"
);

if(mysqli_num_rows($check) > 0)
{
    $_SESSION['error'] =
    "Email already exists";

    header(
    "Location: ../teacher/teacher.php"
    );

    exit();
}

$query =
"INSERT INTO teachers
(name,email,department,
 phone,password)

VALUES

('$name',
 '$email',
 '$department',
 '$phone',
 '$password')";

if(mysqli_query($conn, $query))
{
    $_SESSION['success'] =
    "Signup Successful";
}
else
{
    $_SESSION['error'] =
    "Signup Failed";
}

header(
"Location: ../teacher/teacher.php"
);

exit();

?>