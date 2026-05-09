<?php

session_start();

if(!isset($_SESSION['hod_id']))
{
    header("Location: hod.php");

    exit();
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>HOD Dashboard</title>

    <link rel="stylesheet"
          href="../css/style.css">

</head>

<body>

<?php include "../includes/header.php"; ?>

<div class="auth-container">

    <div class="auth-card">

        <h1>

            Welcome

            <?php
            echo $_SESSION['hod_name'];
            ?>

        </h1>

        <p>

            Login Successful

        </p>

        <a href="../php/logout.php"
           class="primary-btn">

            Logout

        </a>

    </div>

</div>

</body>

</html>