<?php
session_start();

if(!isset($_SESSION['name'])) {
    header("Location: login.php");
}

/* Daten holen und Message LÖSCHENNN */
$blogid = $_GET['blogid'];

$db = mysqli_connect("localhost", "root", "", "portfolio");
$sql = "DELETE FROM messages WHERE blogid = '$blogid'";
mysqli_query($db, $sql);

header("Location: blogs.php");

mysqli_close($db);