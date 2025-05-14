<?php
session_start();

if(!isset($_SESSION['name'])) {
    header("Location: login.php");
}

/* Daten holen und Message LÖSCHENNN */
$messageid = $_GET['messageid'];

$db = mysqli_connect("localhost", "root", "", "portfolio");
$sql = "DELETE FROM messages WHERE messageid = '$messageid'";
mysqli_query($db, $sql);

header("Location: about.php");

mysqli_close($db);