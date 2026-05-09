<?php

session_start();

if(!isset($_SESSION['student_id']))
{
    header("Location: portal.php");

    exit();
}

?>
<h1>

Welcome

<?php echo $_SESSION['student_name']; ?>

</h1>

<a href="../php/logout.php">

Logout

</a>