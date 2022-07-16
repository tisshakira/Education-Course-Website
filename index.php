<?php
    include("connection.php");

//   error_reporting(0);

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']); 
      
        $sql = "SELECT uid FROM mm2021 WHERE email = '$email' and pswd = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
		
        if(empty($_POST['email']) && empty($_POST['password'])){
            echo "<script>
                    alert('please input the data');
                </script>";
        }
            
        else {
            if ($count == 1) {
                header('Location: userhp.html');
            }
        }
          
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EDU.YOU</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="main">
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo">EDU.YOU</h2>
                </div>
                
                <div class="menu">
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="location.html">LOCATION</a></li>
                        <li><a href="teacher_data.php">OUR TEACHERS</a></li>
                        <li><a href="email.php">CONTACT</a></li>
                    </ul>
                </div>
                
                <div class="search">
                    <input class="srch" type="search" name="" placeholder="Type to text">
                    <a href="#"> <button class="btn">Search</button></a>
                </div>
                
            </div>
            <div class="content">
                <h1>Where<br><span>EDUCATION</span> <br>Start</h1>
                <p class="par">“Live as if you were to die tomorrow.<br>Learn as if you were to live forever.”<br>  ― Mahatma Gandhit</p>
                
                <button class="cn"><a href="#">JOIN US</a></button>
                
                <div class="form">
                    <h2>Login Here</h2>
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="Password" name="password" placeholder="Enter Password Here">
                    <button class="btnn"><a href="userhp.html">Login</a></button>
                    
                    <p class="link">Don't have an account<br>
                    <a href="signup.html">Sign Up here</a></p>
                    <p class="liw">Log in with</p>
                    
                    
                    
                    <div class="icon">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>
                </div>
            </div>
            
        </div>
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</html>
