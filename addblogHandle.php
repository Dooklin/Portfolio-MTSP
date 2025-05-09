<?php
session_start();

if(!isset($_SESSION['name'])) {
    header("Location: login.php");
}

if(isset($_POST['submit-edit-blog'], $_POST['title'], $_POST['content'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $db = mysqli_connect("localhost", "root", "", "portfolio");
    $sql = "INSERT INTO blogs (title, content) VALUES ('$title', '$content')";
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