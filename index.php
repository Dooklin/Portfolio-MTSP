<?php
session_start();

if(!isset($_SESSION['name'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Elias Schinkinger">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>
</head>
<body>
    <?php include "header.php" ?>

    
</body>
</html>