<?php
session_start();

// if user isnt logged in as guest or admin / GET OUT
if(!isset($_SESSION['name']) && !isset($_SESSION['guest'])) {
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
    <!-- About Me -->
     <div id="blog-container">
        <div id="blog-wrapper">
            <div class="blog-container">
                <hr>
                <h2 class="blog-heading">HELLO!</h2>
                <div class="blog-content">
                    My Name is Elias and welcome to my Blog!<br>
                    <br>
                    Heres ME <br>
                    
                    (That one album cover grade pic that i sent eva)
                    <br>
                </div>
                <hr>
                <h3 class="blog-heading">Find out more about me:</h3>
                <div class="blog-content">
                    <a href="about.php">Right here</a>
                    <br>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <div id="arrow-cont">
        <div id="arrow-wrap">
            <div id="downward-arrow"></div>
            <div id="left"></div>
            <div id="right"></div>
        </div>
    </div>

    <div id="spacer"></div>

    <!-- BLOGS -->
    <div id="content-container">
        <div id="content-wrapper">
            <h1>BLOGS</h1>
            <?php
            /* If an Admin is logged in, add an add Blog Link */
            if(isset($_SESSION['name'])) {
                echo '<a href="addblog.php" class="add">ADD A BLOG</a>';
            }
            ?>
            
            <?php
            /* Get 3 of the most recent Blogs from The Database */
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
            <h1>PROJECTS</h1>
            <?php
            /* If an Admin is logged in, add an add Project Link */
            if(isset($_SESSION['name'])) {
                echo '<a href="addproject.php" class="add">ADD A PROJECT</a>';
            }
            ?>

            <?php
            /* Get 3 Of the most recent Projects from The Database */
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
                echo         $content, "<br>";
                echo     "<span><img src='$imagepath' alt='$title' id='projectIMG' width='200'></span>";
                echo     "</div>";
                if (isset($_SESSION['name'])) {
                    echo "<a href='editproject.php?projectid=$projectid&title=$title&content=$content&imagepath=$imagepath' class='blog-edit'>Edit</a>";
                }
                echo     "<hr>";
                echo "</div>";
            }
            mysqli_close($db);
            ?>
            <a href="projects.php" id="all-projects">See All My Projects!</a>
        </div>
        
    </div>

    <?php include "footer.php" ?>
    
    <svg id="triangle-bg" style="position: fixed; z-index: -1; width: 100%; height: 100%; top: 0; left: 0;"></svg>

    <script src="spawnTriangles.js"></script>
</body>
</html>