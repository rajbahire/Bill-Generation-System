<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Teacher Portal</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

<!-- Header -->
<div class="header">

    <div class="logo-section">

        <img src="../assets/image.png" alt="College Logo">

        <span>
            Government College of Engineering, Aurangabad
        </span>

    </div>

</div>

<!-- Back Button -->
<div class="back" onclick="goBack()">
    ← Back to Role Selection
</div>

<!-- Authentication Container -->
<div class="auth-container">

    <div class="auth-card">

        <div class="icon large">🎓</div>

        <h2>Teacher Portal</h2>

        <p>Sign in to manage your bills</p>

        <!-- Error Message -->
        <?php

        if(isset($_SESSION['error']))
        {
            echo "<div class='error-msg'>" . $_SESSION['error'] . "</div>";

            unset($_SESSION['error']);
        }

        if(isset($_SESSION['success']))
        {
            echo "<div class='success-msg'>" . $_SESSION['success'] . "</div>";

            unset($_SESSION['success']);
        }

        ?>

        <!-- Toggle Buttons -->
        <div class="toggle">

            <button type="button"
                    id="loginBtn"
                    class="active">

                Sign In

            </button>

            <button type="button"
                    id="signupBtn">

                Sign Up

            </button>

        </div>

        <!-- LOGIN FORM -->
        <form id="loginForm"
              class="form active"
              action="../php/teacher_login.php"
              method="POST">

            <label>Email</label>

            <input
                type="email"
                name="email"
                placeholder="Enter your college email"
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

        <!-- SIGNUP FORM -->
        <form id="signupForm"
              class="form"
              action="../php/teacher_signup.php"
              method="POST">

            <label>Full Name</label>

            <input
                type="text"
                name="name"
                placeholder="Enter Full Name"
                required
            >

            <label>Email</label>

            <input
                type="email"
                name="email"
                placeholder="Enter College Email"
                required
            >

            <label>Department</label>

            <input
                type="text"
                name="department"
                placeholder="Enter Department"
                required
            >

            <label>Phone</label>

            <input
                type="tel"
                name="phone"
                placeholder="Enter Phone Number"
                required
            >

            <label>Password</label>

            <input
                type="password"
                name="password"
                id="password"
                placeholder="Create Password"
                required
            >

            <label>Confirm Password</label>

            <input
                type="password"
                name="confirm_password"
                id="confirmPassword"
                placeholder="Confirm Password"
                required
            >

            <button type="submit"
                    class="primary-btn">

                Sign Up

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