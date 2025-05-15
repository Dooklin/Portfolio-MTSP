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
    <title>Add Blog</title>
</head>
<body>
    <?php include "header.php" ?>
    <div id="intro-container">
        <div id="intro-wrapper">
            <h1 id="intro-heading">Creating a Blog</h1>
        </div>
    </div>
    <div id="content-container">
        <div id="content-blog-wrapper">
            <form action="addblogHandle.php" method="post">
                <div class="start-blog-container">
                    <hr>
                    <input type="text" name="title" id="edit-title" placeholder="Title goes here :P">
                    <div class="start-blog-content">
                        <textarea name="content" id="edit-content" placeholder="Write your heart out :]"></textarea>
                    </div>
                    <hr>
                    <input type="submit" value="Publish" name="submit-edit-blog" id="submit-edit-blog">
                </div>
            </form>
        </div>
    </div>

    <?php include "footer.php" ?>
    
    <svg id="triangle-bg" style="position: fixed; z-index: -1; width: 100%; height: 100%; top: 0; left: 0;"></svg>

    <script src="spawnTriangles.js"></script>
</body>
</html>