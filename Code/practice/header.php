<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rent Tracker</title>

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>


    <nav>
      <div class="wrapper">
        <a href="index.php"><img src="img/logo.png" alt="Page logo"></a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">Features</a></li>
          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='dashboard.php'>Dashboard</a></li>";
              echo "<li><a href='logout.php'>Logout</a></li>";
            }
            else {
              echo "<li><a href='signup.php'>Sign up</a></li>";
              echo "<li><a href='login.php'>Log in</a></li>";
            }
          ?>
        </ul>
      </div>
    </nav>

<div class="wrapper">
