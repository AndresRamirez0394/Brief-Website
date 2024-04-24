<?php
    include("header.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="Styles/upcoming.css">
</head>
<body>
    <div class = "seated" 
        id="seated-55fdf2c0" 
        data-artist-id="27064dd0-b033-480e-8216-206faf1f6e15" 
        data-css-version="3">
    </div>
    <script src="https://widget.seated.com/app.js"></script>
    <script>
        document.getElementById('backBtn').addEventListener('click', function() {
                window.location.href = 'http://localhost/BRIEF/home.php';
        });
    </script>
</body>
</html>

<?php
    include("footer.html");
?>