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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>
</head>
<body>
    <?php include "header.php" ?>
    <div id="body-background">
        <div id="other-background">

        </div>
    </div>
    
</body>
</html>