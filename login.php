<?php
    include("connection.php");
    session_start();
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
