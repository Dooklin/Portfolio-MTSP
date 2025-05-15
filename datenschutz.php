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
    <title>Privacy Policy</title>
</head>
<body>
    <?php include "header.php" ?>
    <div id="intro-container">
        <div id="intro-wrapper">
            <h1 id="intro-heading">Data and Privacy Policy</h1>
        </div>
    </div>
    <div id="blog-container">
        <div id="blog-wrapper">
            <div class="blog-container">
                <hr>
                <h2 class="blog-heading">How do we deal with your data?</h2>
                <div class="blog-content">
                    You can't upload anything, no data gets harvested<br>
                    <br>
                    When you login as Guest a session gets saved, <br>
                    other things you did (and can't) such as uploading files, creating projects and publishing blogs are not saved <br>
                    <br>
                    Being logged in as an Admin, an admin session gets created <br>
                    saved data includes <br>
                    - username <br>
                    - encrypted password <br>
                    - session id (wow) <br>
                    <br>
                    All things you can do as an Admin is being saved, this should not matter to you though, because you are not an admin... <br>
                    <br>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php" ?>
    
    <svg id="triangle-bg" style="position: fixed; z-index: -1; width: 100%; height: 100%; top: 0; left: 0;"></svg>

    <script src="spawnTriangles.js"></script>
</body>
</html>