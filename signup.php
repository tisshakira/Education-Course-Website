<?php
    require 'connection.php';
    
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    $sql = "INSERT INTO tsk_ssipSign (uname, email, pswd, s, ts) 
            VALUES('$uname', '$email', '$pass', 0, CURRENT_TIME());";
            
    $run = mysqli_query($db, $sql);
    $result = mysqli_affected_rows($db);

    if ($result > 0) {
        echo "<script>
                alert('Registration successful.')
            </script>";
    } 
    else {
        echo "<script>
                alert('Registration Failed.')
            </script>";
    }
?>
