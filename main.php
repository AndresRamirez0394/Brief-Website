<?php

    include("header.html");
    session_start();

    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    else {
        $username = "";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="Styles/mainStyle.css">
</head>
<body>
    <div class = "player">
        <h2>Our new single, "Tomorrow" is available now!</h2>
        <iframe style="border-radius:5px" src="https://open.spotify.com/embed/track/1Z1zr5Y9Sg6SiZGr8nBF0I?utm_source=generator&theme=0" width="500px" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
    </div>
</body>
</html>

<?php
    include "footer.html";
?>