

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anmelden</title>
</head>
<body>
    <div id="background">
        <div id="login-container">
            <div id="login-wrapper">
                <h1>Anmelden</h1>
                    <form action="loginHandle.php" method="post">
                    <input type="text" password="Name" name="name" id="name-input">
                    <input type="password" placeholder="Password" name="password" id="password-input">

                    <input type="submit" value="Anmelden" name="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>