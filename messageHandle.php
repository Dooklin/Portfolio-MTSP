<?php
session_start();

if(!isset($_SESSION['guest']) && !isset($_SESSION['name'])) {
    header("Location: login.php");
}
/* If everythings there, insert the new Message  */
if(isset($_POST['submit-message-private'], $_POST['poster'], $_POST['title'], $_POST['content'])) {
    $poster = $_POST['poster'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date("Y-m-d");

    $db = mysqli_connect("localhost", "root", "", "portfolio");
    $sql = "INSERT INTO messages (poster, title, content, date) VALUES ('$poster', '$title', '$content', '$date')";
    if(mysqli_query($db, $sql)) {
        header("Location: about.php");
        mysqli_close($db);
    } else {
        echo "Something went wrong... :/";
        mysqli_close($db);
    }
} else {
    echo "You're not supposed to be here yet... GET OUT";
}
?>