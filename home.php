<?php
    require_once "database.php";

    session_start();

    if(isset($_POST["selectBtn"])){

        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $usernames =mysqli_real_escape_string($conn, $_POST["username"]);
            $passwords = password_hash($_POST["password"], PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (usernames, passwords) VALUES ('$usernames', '$passwords')";

            if(mysqli_query($conn, $sql)){
                $_SESSION["username"] = $usernames;
                header("Location: main.php");
                exit;
            } else {
                echo '<script>alert("An error occurred while registering. Please try again.")</script>';
            }
        }
        else{
            echo '<script>alert("Please fill in all the spaces!")</script>';
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
                <h3>Already have an account?...</h3>
                <a href="http://localhost/BRIEF/signup.php" style = "color:black;">Sign up</a>
                <h3>Or...</h3>
                <a href="http://localhost/BRIEF/main.php" style = "color:black;">Continue as guest</a>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    
?>

