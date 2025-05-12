<?php
/* loggin out */
session_start();

session_destroy();

header("Location: login.php");
?>