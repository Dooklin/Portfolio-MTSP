<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Elias Schinkinger">
    <link rel="stylesheet" href="https://use.typekit.net/dfj2dpe.css">
    <link rel="stylesheet" href="style.css">
    <title>Blogs</title>
</head>
<body>
    <?php include "header.php" ?>
    <div id="blog-container">
        <div id="blog-wrapper">
            <!-- php like here (all projects with desc n stuff...) -->
            <div class="blog-container">
                <h2 class="blog-heading">Why I Adore Ants</h2>
                <div class="blog-content">
                    They kinda Cool...
                </div>
                <hr>
            </div>
            <div class="blog-container">
                <h2 class="blog-heading">Why I Adore Ants</h2>
                <div class="blog-content">
                    They kinda Cool...
                </div>
                <hr>
            </div>
            <div class="blog-container">
                <h2 class="blog-heading">Why I Adore Ants</h2>
                <div class="blog-content">
                    They kinda Cool...
                </div>
                <hr>
            </div>
        </div>
    </div>
    
    <svg id="triangle-bg" style="position: fixed; z-index: -1; width: 100%; height: 100%; top: 0; left: 0;"></svg>

    <script src="spawnTriangles.js"></script>
</body>
</html>