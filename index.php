<?php
session_start();

if(!isset($_SESSION['name']) &&  !isset($_SESSION['guest'])) {
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
    <div id="intro-container">
        <div id="intro-wrapper">
            <h1 id="intro-heading">Welcome to my very own Portfolio site!</h1>
        </div>
    </div>
    <!-- BLOGS -->
    <div id="content-container">
        <div id="content-wrapper">
            <?php
            $db = mysqli_connect("localhost", "root", "", "portfolio");
            $sql = "SELECT * FROM blogs ORDER BY blogid DESC LIMIT 3;";
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
            <a href="blogs.php" id="all-blogs">See All My Blogs!</a>
        </div>
    </div>

    <div id="spacer"></div>

    <!-- PROJECTS -->
     <div id="project-container">
        <div id="project-wrapper">
            <!-- php like here 5 blogs -->
            <?php
            $db = mysqli_connect("localhost", "root", "", "portfolio");
            $sql = "SELECT * FROM projects ORDER BY projectid DESC LIMIT 3;";
            $result = mysqli_query($db, $sql);
            while($row = mysqli_fetch_array($result)) {
                $projectid = $row['projectid'];
                $title = $row['title'];
                $content = $row['content'];
                $imagepath = $row['imagepath'];

                echo '<div class="start-project-container">';
                echo     "<h2>$title</h2>";
                echo     '<div class="start-project-content">';
                echo         $content;
                echo     "<span><img src='$imagepath' alt='$title' id='projectIMG' width='500' height='500'></span>";
                echo     "</div>";
                if (isset($_SESSION['name'])) {
                    echo "<a href='editproject.php?projectid=$projectid&title=$title&content=$content&imagepath=$imagepath' class='blog-edit'>Edit</a>";
                }
                echo     "<p>Created On: $date</p>";
                echo     "<hr>";
                echo "</div>";
            }
            mysqli_close($db);
            ?>
            <a href="projects.php" id="all-projects">See All My Projects!</a>
        </div>
        
    </div>
    
    <svg id="triangle-bg" style="position: fixed; z-index: -1; width: 100%; height: 100%; top: 0; left: 0;"></svg>

    <script src="spawnTriangles.js"></script>
</body>
</html>