<?php
session_start();

if(!isset($_SESSION['name'])) {
    header("Location: login.php");
}

/* If everythings there, insert the new Blog  */
if(isset($_POST['submit-edit-blog'], $_POST['title'], $_POST['content'], $_POST['imagepath'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $imagepath = $_POST['imagepath'];

    $db = mysqli_connect("localhost", "root", "", "portfolio");
    $sql = "INSERT INTO projects (title, content, imagepath) VALUES ('$title', '$content', '$imagepath')";
    if(mysqli_query($db, $sql)) {
        header("Location: projects.php");
        mysqli_close($db);
    } else {
        echo "Something went wrong... :/";
        mysqli_close($db);
    }
} else {
    echo "You're not supposed to be here yet... GET OUT";
}
?>