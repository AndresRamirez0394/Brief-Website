<?php
    

    session_start();

    //if form is submitted and session starts
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once "database.php";

        //retrieve users username and password 
        $username = $_POST["username"];
        $password = $_POST["password"];

        //sql query to check if username and password match the database
        $sql = "SELECT * FROM users WHERE usernames = '$username'";
        //store boolean result in variable
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            echo '<script>alert("Username already exists")</script>';
        }else{
            echo '<script>alert("Username does not exist")</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Styles/homeStyle.css">
</head>
<body>
    <div class="wrapper">
        <h1>BRIEF</h1>
        <form action ="home.php" method="post">
            <div class="dropdown-menu">
            </div>
            <div class = "signup">
               <h2> Username and password:</h2>
                <input type="text" name = "username"><br>
                <input type="password" name = "password">
                <br><br>    
            </div>
            <button type="submit" name="selectBtn" id="selectBtn" class="btn">Continue</button>
            <div class = "guest">
                <h3>Don't have an account?...</h3>
                <a href="http://localhost/BRIEF/home.php">Sign up</a>
            </div>
        </form>
    </div>
</body>
</html>