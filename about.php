<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Elias Schinkinger">
    <link rel="stylesheet" href="https://use.typekit.net/dfj2dpe.css">
    <link rel="stylesheet" href="style.css">
    <title>About</title>
</head>
<body>
    <?php include "header.php" ?>
    <div id="intro-container">
        <div id="intro-wrapper">
            <h1 id="intro-heading">A little about MYSELF😎</h1>
        </div>
    </div>
    <div id="blog-container">
        <div id="blog-wrapper">
            <div class="blog-container">
                <hr>
                <h2 class="blog-heading">HELLO!</h2>
                <div class="blog-content">
                    My Name is Elias and welcome to my Blog!<br>
                    <br>
                    Heres ME 
                    <br>
                    <img src="pics/me.png" alt="Picture of Me">
                    <br>
                    Pretty cool Right?<br>
                    <br>
                    Go <a href="index.php#content-container">here</a> to see my most recent blogs
                </div>
                <h3 class="blog-heading">LINKS</h3>
                <div class="blog-content">
                    Instagram: <a href="https://www.instagram.com/elebele_124/">EleBele_124</a><br>
                    Youtube: <a href="https://www.youtube.com/@Dooklin">Dooklin</a><br>
                    Github: <a href="https://github.com/Dooklin">Dooklin</a> <br>
                    <br>
                </div>
                <hr>
                <h3 class="blog-heading">FRIENDS:</h3>
                <div class="blog-content">
                    <a href="https://www.youtube.com/@_honeyfox">Honeyfox</a> 🦊 <br>
                    <a href="https://www.youtube.com/@masnlp">MasnLP</a> 🦡 <br>
                    <a href="https://www.youtube.com/@greenysoka">Greeny</a> 🐈 <br>
                    <br>
                </div>
                <hr>
                <h3 class="blog-heading">DOWNLOADS:</h3>
                <div class="blog-content">
                    Games: <br>
                    Prototype 2D Platformer: <a href="downloads/2DPlatformer.zip" download>Download</a><br>
                    Space to Jump, L to Climb, J to Dash rest you can figure out on your own <br>
                    unzip, open Game.exe <br>
                    <br>
                    <br>
                    <?php
                    /* As Adminuser you can see Personal Downloads */
                    if(isset($_SESSION['name'])) {
                        echo "Personal Downloads: <br>";
                        echo "Dokumentation Projektarbeit: <a href='downloads/doku.docx' download>Download</a><br>";
                        echo "Corporate Design: <a href='downloads/corporatedesign.zip' download>Download</a><br>";
                        
                    }
                    ?>
                    <br>
                </div>
                <hr>
                <h3 class="blog-heading">CONTACT ME HERE! </div>
                <div class="start-blog-container">
                    <form action="messageHandle.php" method="post">
                        <input type="text" onchange="checkPoster();" name="poster" id="edit-title" placeholder="Your Name here">
                        <input type="text" onchange="checkTitle();" name="title" id="edit-title" placeholder="Title goes here :P">
                        <div class="start-blog-content">
                            <textarea name="content" onchange="checkContent();" id="edit-content" placeholder="Write your heart out :], Banned Words include: 'Alexander Fuchs', 'job', 'employment', 'Drivers License', 'Führerschein', 'Ottakringer'"></textarea>
                        </div>

                        <input type="submit" value="SEND" name="submit-message-private" id="submit-edit-blog">
                    </form>
                </div>

                <hr>
                <?php
                if(isset($_SESSION['name'])) {
                    echo '<h3 class="blog-heading">MESSAGES:</h3>';
                    /* Get all of the Messages from The Database, sorted by most recently added */
                    $db = mysqli_connect("localhost", "root", "", "portfolio");
                    $sql = "SELECT * FROM messages ORDER BY messageid DESC;";
                    $result = mysqli_query($db, $sql);
                    while($row = mysqli_fetch_array($result)) {
                        $messageid = $row['messageid'];
                        $poster = $row['poster'];
                        $title = $row['title'];
                        $content = $row['content'];
                        $date = $row['date'];
                        
                        echo "<h2 class='blog-heading'>$title</h2>";
                        echo "<h1 class='blog-content'>Poster: $poster - Posted at: $date</h1>";
                        echo '<div class="blog-content">';
                        echo $content;
                        echo '</div>';
                    
                        if(isset($_SESSION['name'])) {
                            echo "-> <a href='deletePrivateMessage.php?messageid=$messageid' style='all: unset; cursor: pointer;'>🗑️</a>";
                        }
                        echo "<hr>";
                    }
                    mysqli_close($db);
                        
                }
                
                ?>

            </div>
        </div>
    </div>

    <?php include "footer.php" ?>
    
    <svg id="triangle-bg" style="position: fixed; z-index: -1; width: 100%; height: 100%; top: 0; left: 0;"></svg>

    <script src="spawnTriangles.js"></script>

    <script>
    const swearWords = ['Alexander Fuchs', 'job', 'employment', 'Drivers License', 'Führerschein', 'Ottakringer'];

    const posterInput = document.getElementById('edit-title');
    const titleInput = document.querySelector('input[name="title"]');
    const contentInput = document.getElementById('edit-content');
    const submitButton = document.getElementById('submit-edit-blog');

    let posterValid = false;
    let titleValid = false;
    let contentValid = false;

    function normalize(text) {
    return text.toLowerCase().replace(/[^a-z]/g, '')     // Anscheinend gehen so symbole und leerzeichen weg
    }

    function containsSwearWords(text) {
        const normalized = normalize(text);
        return swearWords.some(word => normalized.includes(normalize(word)));
    }


    function checkPoster() {
        const text = posterInput.value.trim();
        posterValid = text.length > 1 && !containsSwearWords(text);
        validateForm();
    }

    function checkTitle() {
        const text = titleInput.value.trim();
        titleValid = text.length > 1 && text.length <= 50 && !containsSwearWords(text);
        validateForm();
    }

    function checkContent() {
        const text = contentInput.value.trim();
        contentValid = text.length > 1 && !containsSwearWords(text);
        validateForm();
    }

    function validateForm() {
        submitButton.disabled = !(posterValid && titleValid && contentValid);
    }

    validateForm();

    posterInput.addEventListener('input', checkPoster);
    titleInput.addEventListener('input', checkTitle);
    contentInput.addEventListener('input', checkContent);
</script>

</body>
</html>