<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
        <title>Add Teacher Data</title>
    <body bgcolor='#ffffff'>
        <div class ="Font_title"
	style="text-align: center; font-weight: 300; color:#ff7200">
         <h1> Add New Teacher Data </h1>
	  </div>
	  
	<div class="kotak_login"
    style= 	"margin: 80px auto;
	padding: 30px 20px;
    position: absolute;
    background-color: white;">
    
       <img src="" alt="">
    </div>

    <div class="box-image">
    </div>

    
    <div class="form_login"
    style="position: absolute;
	box-sizing : border-box;
	width: 50%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;

    
    background-color:#ff7200;
    border: 1px solid #000000;
    box-sizing: border-box;
    box-shadow: 0px 4px 4px #000000;
    border-radius: 32px;
    left: 50%;
  top: 30%;
  transform: translate(-50%, -50%);"
    >

        <form action="" method ="post">
 <ul style= 'list-style: none;'>
                
                <li>
                    <lable for="tid" style="display: block; margin-bottom: 5px;">TID:</lable>
                    <input type="text" name="tid" style="display: block; margin-bottom: 15px;">
                </li>
                
                <li>
                     <lable for="name" style="display: block; margin-bottom: 5px;">Name:</lable>
                    <input type="text" name="name" style="display: block; margin-bottom: 15px;"> 
                </li>
                
                 <li>
                     <lable for="email" style="display: block; margin-bottom: 5px;">Email:</lable>
                    <input type="text" name="email" style="display: block; margin-bottom: 15px;"> 
                </li>
                
                 <li>
                     <lable for="subject" style="display: block; margin-bottom: 5px;">Subject:</lable>
                    <input type="text" name="subject" style="display: block; margin-bottom: 15px;"> 
                </li>
                
                <li>
                    <button type="submit" name="submit">
                        Insert Data</button>
                </li>   
                    
            </ul>
        </form>
        </div>
    </body>
</html>
