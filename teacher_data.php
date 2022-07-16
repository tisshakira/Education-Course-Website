<?php 
require 'connection.php';
$teach = query("SELECT * FROM teacher_tsk");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Teacher Data Page</title>
	 <link rel="stylesheet" href="teacher_data.css">
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
                        <li><a href="maps.php">LOCATION</a></li>
                        <li><a href="teacher_data.php">OUR TEACHERS</a></li>
                        <li><a href="email.php">CONTACT</a></li>
                    </ul>
                </div>
 <div class ="font_title"
	style="text-align: center; font-weight: 400; color:#ff7200">
	<h1>OUR TEACHERS</h1>
	</div>
	
	<style>
	.font_title{
    width: 100%;
    height: 109vh;
    padding-left: 20px;
    float: center;
    padding-top: 80px;
	}
	
	.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
}

.menu{
    width: 400px;
    float: left;
    height: 70px;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
}

ul li{
    list-style:none;
    margin-left: 62px;
    margin-top: 25px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #ff7200;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #ff7200;
}

	</style>
	
    
    <div class="link">
        <a href="index.php" class="action-btn">Back to Homepage</a>
         <a href="insert.php" class ="action-btn">Add New Teacher Data</a>
    <br><br>
          </div>
    
    
	<table class="table" border="1" cellpadding="10" cellspacing="0">

		<tr bgcolor='#ff7200'>
			<th>No.</th>
			<th>Control</th>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Subject</th>

	</tr>
	
	<?php $i = 1; ?>
	<?php foreach( $teach as $row ): ?>
	
	<tr bgcolor='#fff'>
	    <td> <?= $i; ?> </td>
	    <td>
	        <a href="update.php?id=<?= $row["id"]; ?>">update</a> |
	        <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Delete this data?');">delete</a>
	        
	    </td>
	 
	<td> <?= $row["tid"]; ?></td>
	<td> <?= $row["name"]; ?> </td>
	<td> <?= $row["email"]; ?></td>
	<td> <?= $row["subject"]; ?> </td>
	</tr>
	
	
	<?php $i++; ?>
	<?php endforeach; ?>

</table>
</body>
</html>
