<?php
if(isset($_POST['send'])) {
    $email = $_POST['email'];
	$header	= $_POST['header'];
	$message = $_POST['message'];
	$sender	= 'From: '.$email;
	
	if(mail('karlacahaya10@gmail.com', $header, $message, $sender)) {
		echo "<script type='text/javascript'>alert('Your email has been sent!');</script>";
	}
    
    else{
		echo "<script type='text/javascript'>alert('Error!');</script>";
	}
}
?>

<html>
<head>
	<title>send email</title>
</head>
<body>
     <div class ="font_title"
	style="text-align: center; font-weight: 400; color:#ff7200">
   <h1>SEND US YOUR TOUGHTS!</h1>
	</div>
	<div class="email"
    style="position: absolute;
	box-sizing : border-box;
	width: 60%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
    
    background-color:#ff7200;
    border: 1px solid #000000;
    box-sizing: border-box;
    box-shadow: 0px 4px 4px #000000;
    border-radius: 32px;
   left: 50%;
  top: 40%;
  transform: translate(-50%, -50%);"
    >
	    <form method="POST">
        <label for="email">Email (Sender) :</label><br>
        <input type="text" name="email" placeholder="Email" required><br><br>
        <label for="email">Subject :</label><br>
		<input type="text" name="header" placeholder="Subject" required><br><br>
        <label for="email">Message :</label><br>
		<textarea name="message" placeholder="Message" rows="10" cols="100" required></textarea><br>
		<input type="submit" name="send" value="Send" /> 
	</form>	
		<a href="matrik.html">Matrices</a>
		</div>
</body>
</html>

