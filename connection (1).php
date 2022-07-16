<?php 
$conn = mysqli_connect("localhost","id17543576_mm2021ssip","Ssip2021001-","id17543576_ssipmm2021a");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

 
function delete($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM teacher_tsk WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function register($data){
    global $conn;
    
    $username =strtolower ($data["username"]);
    $password =mysqli_real_escape_string($conn, $data["password"]);
    

//insert register data to db
mysqli_query($conn, "INSERT INTO regist VALUES ('','$username','$password')");

return mysqli_affected_rows($conn);
}

function update($data){
    global $conn;
    
    $id = $data["id"];
    $tid = htmlspecialchars($data["tid"]);
    $name =htmlspecialchars($data["name"]);
    $email=htmlspecialchars($data["email"]);
    $subject=htmlspecialchars($data["subject"]);
    
    $query = "INSERT INTO teacher_tsk
    VALUES ('','$tid','$name','$email','$subject')";
    
    $query= "UPDATE teacher_tsk SET
    
            tid = '$tid',
            name = '$name',
            email = '$email',
            subject = '$subject'
            
            WHERE id = $id";
            
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function search($keyword){
    $query ="SELECT *FROM stdquiz
    WHERE 
    name  LIKE '%$keyword%' OR
    sid  LIKE '%$keyword%' OR
    email  LIKE '%$keyword%' OR
    std_level  LIKE '%$keyword%' 
    ";
    return query($query);
}

function insert($data){
    global $conn;
    
    $tid = htmlspecialchars($data["tid"]);
    $name =htmlspecialchars($data["name"]);
    $email=htmlspecialchars($data["email"]);
    $subject=htmlspecialchars($data["subject"]);
    
    $query = "INSERT INTO teacher_tsk
    VALUES ('','$tid','$name','$email','$subject')";
    
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

?>



