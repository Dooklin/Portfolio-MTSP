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
            <h1 id="intro-heading">Here are ALL my Blogs!</h1>
        </div>
    </div>
    <div id="blog-container">
        <div id="blog-wrapper">
            <?php
            if(isset($_SESSION['name'])) {
                echo '<a href="addblog.php" class="add">ADD A BLOG</a>';
            }
            ?>
            
            <?php
            $db = mysqli_connect("localhost", "root", "", "portfolio");
            $sql = "SELECT * FROM blogs ORDER BY blogid DESC;";
            $result = mysqli_query($db, $sql);
            while($row = mysqli_fetch_array($result)) {
                $blogid = $row['blogid'];
                $title = $row['title'];
                $content = $row['content'];
                $date = $row['created_at'];

                echo '<div class="start-blog-container">';
                echo     "<h2>$title</h2>";
                echo     '<div class="start-blog-content">';
                echo         $content;
                echo     "</div>";
                if (isset($_SESSION['name'])) {
                    echo "<a href='editblog.php?blogid=$blogid&title=$title&content=$content&date=$date' class='blog-edit'>Edit</a>";
                }
                echo     "<p>Created On: $date</p>";
                echo     "<hr>";
                echo "</div>";
            }
            mysqli_close($db);
            ?>
        </div>
    </div>

    <?php include "footer.php" ?>
    
    <svg id="triangle-bg" style="position: fixed; z-index: -1; width: 100%; height: 100%; top: 0; left: 0;"></svg>

    <script src="spawnTriangles.js"></script>
</body>
</html>