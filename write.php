<?php 
if (isset($_POST['Barcode']))
{ 
$Device = $_POST['Device']; 
$Barcode = $_POST['Barcode'];
$Decommissioned = $_POST['Decommissioned']; 
if (!empty($Device)) {
	$handle = fopen('file.csv', 'a');
	fwrite($handle, $Barcode.",". $Device.",". $Decommissioned ."," 
."\n"); echo 'Device has been entered';
} else
	{
	echo 'Enter Device.';
}
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type ="text/css">
		button {
				background-color: #FFFFFF;
				color: black;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				min-width: 150px;
				width: 10%;
				
		}

</style>
</head> 
<body>
<div align = "center">
<br>
<br>
<br>

<table>
<tr>
<td>
<div style="background-color:#333333; color:#FFF4F4; padding:3px;">Add Device</div>
</td>
</tr>
<tr>
<td><Form action="write.php" method="POST"> 
Device:<br> <input type="text" name="Device" required><br>
Barcode:<br> <input type="number" name="Barcode" required><br><br>
Device Decommissioned Yet?:<br>
 <select name="Decommissioned" required>
    <option value="Not Required">Not Required</option>
    <option value="No">No</option>
    <option value="Yes">Yes</option>
  </select> 
  <br> 
  <br>
  <input type="submit" value="submit" class="button" onclick="return confirm('Please confirm the 
information')"> </form> 
</td>
</tr>
</table>


<br> 
<br> 
<br> 
<a href="find.php"><button>Confirm Device was added 
to Inventory</button></a> 

<br>
<a href="output.php"><button>Check All Devices Added 
to Inventory</button></a>
<br>
<a href="file.csv"><button>Download CSV File</button></a>
Test
 </body> 
</div>
</html>
