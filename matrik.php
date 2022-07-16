 <html>
<head>
<title>Matrix</title>
</head>
<body>
    <?php
    $A[0] = $_POST['A11'];
    $A[1] = $_POST['A12'];
    $A[2] = $_POST['A13'];
    $A[3] = $_POST['A21'];
    $A[4] = $_POST['A22'];
    $A[5] = $_POST['A23'];
    $A[6] = $_POST['A31'];
    $A[7] = $_POST['A32'];
    $A[8] = $_POST['A33'];

    $B = array();
    $B[0] = $_POST['B11'];
    $B[1] = $_POST['B12'];
    $B[2] = $_POST['B13'];
    $B[3] = $_POST['B14'];
    $B[4] = $_POST['B21'];
    $B[5] = $_POST['B22'];
    $B[6] = $_POST['B23'];
    $B[7] = $_POST['B24'];
    $B[8] = $_POST['B31'];
    $B[9] = $_POST['B32'];
    $B[10] = $_POST['B33'];
    $B[11] = $_POST['B34'];

    $C = array();
    $C[0] = ($A[0]*$B[0])+($A[1]*$B[4])+($A[2]*$B[8]);
    $C[1] = ($A[0]*$B[1])+($A[1]*$B[5])+($A[2]*$B[9]);
    $C[2] = ($A[0]*$B[2])+($A[1]*$B[6])+($A[2]*$B[10]);
    $C[3] = ($A[0]*$B[3])+($A[1]*$B[7])+($A[2]*$B[11]);
    $C[4] = ($A[3]*$B[0])+($A[4]*$B[4])+($A[5]*$B[8]);
    $C[5] = ($A[3]*$B[1])+($A[4]*$B[5])+($A[5]*$B[9]);
    $C[6] = ($A[3]*$B[2])+($A[4]*$B[6])+($A[5]*$B[10]);
    $C[7] = ($A[3]*$B[3])+($A[4]*$B[7])+($A[5]*$B[11]);
    $C[8] = ($A[6]*$B[0])+($A[7]*$B[4])+($A[8]*$B[8]);
    $C[9] = ($A[6]*$B[1])+($A[7]*$B[5])+($A[8]*$B[9]);
    $C[10] = ($A[6]*$B[2])+($A[7]*$B[6])+($A[8]*$B[10]);
    $C[11] = ($A[6]*$B[3])+($A[7]*$B[7])+($A[8]*$B[11]);
    ?>

    <div class="matrices"
    style="position: absolute;
	box-sizing : border-box;
	width: 25%;
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
    <table border="1" align="center" width="200" >
    <?php
    echo "<tr>";
    for($k=0; $k<=3; $k+=1)
    {
        echo "<td>$C[$k]</td>";
    }
    echo "</tr><tr>";
    for($k=4; $k<=7; $k+=1)
    {
         echo "<td>$C[$k]</td>";
    }
    echo "</tr><tr>";
    for($k=8; $k<=11; $k+=1)
    {
         echo "<td>$C[$k]</td>";
    }
    echo "</tr>";
    ?>
    </table>
</div>
</body>
</html>

