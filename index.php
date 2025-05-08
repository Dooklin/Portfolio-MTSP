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
    <link rel="stylesheet" href="https://use.typekit.net/dfj2dpe.css">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>
</head>
<body>
    <?php include "header.php" ?>
    <div id="content-container">
        <div id="content-wrapper">
            <!-- php like here -->
            <div class="start-blog-container">
                <h2>Why I Adore Ants</h2>
                <div class="start-blog-content">
                    They kinda Cool...
                </div>
                <hr>
            </div>
            <div class="start-blog-container">
                <h2>Why I Adore Ants</h2>
                <div class="start-blog-content">
                    They kinda Cool...
                </div>
                <hr>
            </div>
            <div class="start-blog-container">
                <h2>Why I Adore Ants</h2>
                <div class="start-blog-content">
                    They kinda Cool...
                </div>
                <hr>
            </div>
        </div>
    </div>
    
</body>
</html>