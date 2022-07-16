<?php
require 'connection.php';

//get data from the url
$id = $_GET ["id"]; 

//query data teacher by id
$teach = query("SELECT * FROM teacher_tsk WHERE id=$id")[0];

//to check if the data already inserted
if(isset($_POST["submit"]) ){
    
    if(update ($_POST) > 0){
        echo"
        <script> alert('data updated successfuly');
        document.location.href = 'teacher_data.php';
        </script>
        ";
    }else {
        echo "
        <script> alert('data update fail');
        document.location.href = 'teacher_data.php';
        </script>
        ";
    }
}
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Teacher Data</title>
    </head>
    <body>
        <h1> Update new Teacher Data </h1>
        <form action="" method ="post">
            <input type="hidden" name="id" value="<?= $teach["id"]; ?>">
            <ul>
                
                <li>
                    <lable for="tid">tid:</lable>
                    <input type="text" name="tid" id="tid" required value="<?= $teach["tid"]; ?> "> 
                </li>
                
                <li>
                     <lable for="name">name:</lable>
                    <input type="text" name="name"id="name"  value="<?= $teach["name"]; ?> "> 
                </li>
                
                 <li>
                     <lable for="email">email:</lable>
                    <input type="text" name="email"  id="email"  value="<?= $teach["email"]; ?> "> 
                </li>
                
                 <li>
                     <lable for="subject">subject:</lable>
                    <input type="text" name="subject" id="subject"  value="<?= $teach["subject"]; ?> ">  
                </li>
                
                <li>
                    <button type="submit" name="submit">
                        Update Data</button>
                </li>   
                    
            </ul>
        </form>
    </body>
</html>

