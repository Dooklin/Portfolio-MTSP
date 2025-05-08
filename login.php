<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/dfj2dpe.css">
    <link rel="stylesheet" href="style.css">
    <title>Anmelden</title>
</head>
<body>
    <div id="background">
        <div id="login-container">
            <div id="login-wrapper">
                <h1>Anmelden</h1>
                <form action="loginHandle.php" method="post" id="login-form">
                    <input type="text" placeholder="Name" name="name" id="name-input" class="login-input">
                    <input type="password" placeholder="Password" name="password" id="password-input" class="login-input">
                    
                    <input type="submit" value="Anmelden" name="submit" id="submit-login" class="login-input">
                </form>
            </div>
        </div>
    </div>
    <svg id="triangle-bg" style="position: fixed; z-index: -1; width: 100%; height: 100%; top: 0; left: 0;"></svg>

    <script src="spawnTriangles.js"></script>

</body>
</html>