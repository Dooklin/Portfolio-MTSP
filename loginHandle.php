<?php
if(isset($_POST['submit'], $_POST['submit'], $_POST['submit'])) {
    $name = $_POST['name'];
    $passwordEnc = hash("sha256", $_POST['password']);

    $db = mysqli_connect("localhost", "root", "", "portfolio");
    // $sql = "INSERT INTO users (Name, Password, Role) VALUES ('$name', '$passwordEnc', 'Admin')";
    $sql = "SELECT Name, Password FROM users WHERE Name = '$name' && Password = '$passwordEnc'";
    if(mysqli_num_rows(mysqli_query($db, $sql)) == 1) {
        session_start();
        $_SESSION['name'] = '$name';
        mysqli_close($db);
        header("Location: index.php");
    } else {
        echo "Something went wrong, Reload the Website Please";
        mysqli_close($db);
    }
}

if(isset($_POST['guestsubmit'])) {
    session_start();
    $_SESSION['guest'] = 'guest';
    header("Location: index.php");
}

?>