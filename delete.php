<?php
require 'connection.php';

$id = $_GET["id"];

if(delete($id)>0){
    echo"
    <script>
    alert('data successfuly deleted');
    doucument.location.href ='teacher_data.php';
    </script>
    ";

}else {
    echo "
      <script>
    alert('data not deleted!');
    doucument.location.href ='teacher_data.php';
    </script>
    ";

}



?>
