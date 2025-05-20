<?php
session_start();

if(!isset($_SESSION['name'])) {
    header("Location: login.php");
}

/* Daten holen und Message LÖSCHENNN */
$projectid = $_GET['projectid'];

$db = mysqli_connect("localhost", "root", "", "portfolio");
$sql = "DELETE FROM project WHERE projectid = '$projectid'";
mysqli_query($db, $sql);

header("Location: projects.php");

mysqli_close($db);