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
    <div id="intro-container">
        <div id="intro-wrapper">
            <h1 id="intro-heading">A little about MYSELF😎</h1>
        </div>
    </div>
    <div id="blog-container">
        <div id="blog-wrapper">
            <div class="blog-container">
                <hr>
                <h2 class="blog-heading">HELLO!</h2>
                <div class="blog-content">
                    My Names Elias and i am scared of minorities and women
                    <br>
                    (That one album cover grade pic that i sent eva)
                    <br>
                    LINKS: <br>
                    Instagram: <a href="https://www.instagram.com/elebele_124/">EleBele_124</a><br>
                    Youtube: <a href="https://www.youtube.com/@Dooklin">Dooklin</a><br>
                    Github: <a href="https://github.com/Dooklin">Dooklin</a> <br>
                    <br>
                    FRIENDS:<br>
                    <a href="https://www.youtube.com/@_honeyfox">Honeyfox</a> 🦊 <br>
                    <a href="https://www.youtube.com/@masnlp">MasnLP</a> 🦡 <br>
                    <a href="https://www.youtube.com/@greenysoka">Greeny</a> 🐈 <br>
                    <br>
                    DOWNLOADS: <br>
                    Games <br>
                    None yet... Soon to come!<br>
                    <br>
                    Personal Stuff <br>
                    <?php
                    if(isset($_SESSION['name'])) {
                        echo "current state <br>";
                    }
                    ?>
                    current mood

                    TODO<br>
                    ADD PICS (EVA)
                    ADMIN DOWNLAODS FOR LEBENSLAUF / PROJECTS?
                    GUEST DOWNLOADS FOR GAMES AND OR PROJECTS
                    IMRESSUM DATAENSCHUTZZ

    
                </div>
                <hr>
            </div>
        </div>
    </div>
    
    <svg id="triangle-bg" style="position: fixed; z-index: -1; width: 100%; height: 100%; top: 0; left: 0;"></svg>

    <script src="spawnTriangles.js"></script>
</body>
</html>