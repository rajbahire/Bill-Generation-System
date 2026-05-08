<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>HOD Portal</title>

    <!-- CSS -->
    <link rel="stylesheet"
          href="../css/style.css">

</head>

<body>

<div class="header">

    <div class="logo-section">

        <img src="../assets/image.png"
             alt="College Logo">

        <span>
            Government College of Engineering, Aurangabad
        </span>

    </div>

</div>

<div class="back"
     onclick="goBack()">

    ← Back to Role Selection

</div>

<div class="auth-container">

    <div class="auth-card">

        <div class="icon large">⚙️</div>

        <h2>HOD Portal</h2>

        <p>Sign in to manage bills</p>

        <?php

        if(isset($_SESSION['error']))
        {
            echo "<div class='error-msg'>"
                 . $_SESSION['error'] .
                 "</div>";

            unset($_SESSION['error']);
        }

        ?>

        <form action="../php/hod_login.php"
              method="POST"
              class="form active">

            <label>Email</label>

            <input
                type="email"
                name="email"
                placeholder="Enter your HOD email"
                required
            >

            <label>Password</label>

            <input
                type="password"
                name="password"
                placeholder="Enter your password"
                required
            >

            <button type="submit"
                    class="primary-btn">

                Sign In

            </button>

        </form>

    </div>

</div>

<script src="../js/script.js"></script>

<script>

function goBack()
{
    window.location.href = "../index.html";
}

</script>

</body>

</html>