<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="design.css"/>
</head>
<body>    
    <h1 style="text-align: center;font-weight: bold;color: rgb(235, 148, 90);">Omega</h1>
    <ul>
       
        <li><a href="Home01.html">Home</a></li>
        <li><a href="Registration01.html">Registration form</a></li>
        <li><a href="showform.php">View Form</a></li>
        <li><a href="logout.html">Logout</a></li>
        <?php 
        if(isset($_SESSION))
        { session_destroy();
         unset($_SESSION['name']);
         header("location:showform.php");
        }
        ?>
    </ul>
</body>
</html>