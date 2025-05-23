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
    <title>Imprint</title>
</head>
<body>
    <?php include "header.php" ?>
    <div id="intro-container">
        <div id="intro-wrapper">
            <h1 id="intro-heading">Imprint</h1>
        </div>
    </div>
    <div id="blog-container">
        <div id="blog-wrapper">
            <div class="blog-container">
                <hr>
                <h2 class="blog-heading">Data About Me!</h2>
                <div class="blog-content">
                    Name: Elias Schinkinger <br>
                    Location: 48°18'22.9"N 14°17'14.0"E (Live Updates)<br>
                    Favorite Thing: Mexican Food <br>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php" ?>
    
    <svg id="triangle-bg" style="position: fixed; z-index: -1; width: 100%; height: 100%; top: 0; left: 0;"></svg>

    <script src="spawnTriangles.js"></script>
</body>
</html>