<?php
session_start();

if(!isset($_SESSION['name'])) {
    header("Location: login.php");
}

if(isset($_POST['submit-edit-blog'], $_POST['title'], $_POST['content'])) {
    $blogid = $_POST['blogid'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $db = mysqli_connect("localhost", "root", "", "portfolio");
    $sql = "UPDATE blogs SET title = '$title', content = '$content' WHERE blogid = '$blogid'";
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