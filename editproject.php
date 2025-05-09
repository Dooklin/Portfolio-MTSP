<?php
session_start();

if(!isset($_SESSION['name'])) {
    header("Location: login.php");
}

$projectid = $_GET['projectid'];

$db = mysqli_connect("localhost", "root", "", "portfolio");
$sql = "SELECT * FROM projects WHERE projectid = '$projectid'";
mysqli_query($db, $sql);

$title = $_GET['title'];
$content = $_GET['content'];
$imagepath = $_GET['imagepath'];


mysqli_close($db);
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
            <h1 id="intro-heading">Editing <?php echo $title ?></h1>
        </div>
    </div>
    <div id="content-container">
        <div id="content-blog-wrapper">
            <form action="editprojectHandle.php" method="post">
                <div class="start-blog-container">
                    <hr>
                    <input type="hidden" name="projectid" value="<?php echo $projectid ?>">
                    <input type="text" name="title" id="edit-title" value="<?php echo $title; ?>">
                    <div class="start-blog-content">
                        <textarea name="content" id="edit-content"><?php echo $content ?></textarea>
                    </div>
                    <input type="text" name="imagepath" id="edit-imagepath" value="<?php echo $imagepath ?>">
                    <hr>
                    <input type="submit" value="Republish" name="submit-edit-blog" id="submit-edit-blog">
                </div>
            </form>
        </div>
    </div>
    
    <svg id="triangle-bg" style="position: fixed; z-index: -1; width: 100%; height: 100%; top: 0; left: 0;"></svg>

    <script src="spawnTriangles.js"></script>
</body>
</html>