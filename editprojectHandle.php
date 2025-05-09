<?php
session_start();

if(!isset($_SESSION['name'])) {
    header("Location: login.php");
}

if(isset($_POST['submit-edit-blog'], $_POST['title'], $_POST['content'], $_POST['imagepath'])) {
    $projectid = $_POST['projectid'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $imagepath = $_POST['imagepath'];

    $db = mysqli_connect("localhost", "root", "", "portfolio");
    $sql = "UPDATE projects SET title = '$title', content = '$content', imagepath = '$imagepath' WHERE projectid = '$projectid'";
    if(mysqli_query($db, $sql)) {
        header("Location: index.php");
        mysqli_close($db);
    } else {
        echo "Something went wrong... :/";
        mysqli_close($db);
    }
} else {
    echo "You're not supposed to be here yet... GET OUT";
}
?>