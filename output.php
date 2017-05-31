<?php
 
//Open the file.
$fileHandle = fopen("file.csv", "r");
 echo '<table><tr><td>';
//Loop through the CSV rows.
while (($row = fgetcsv($fileHandle, 0, ",")) !== FALSE) {
    //Print out my column data.
	
    echo 'Barcode: ' . $row[0] . '<br>';
    echo 'Device: ' . $row[1] . '<br>';
    echo 'Dismantal: ' . $row[2] . '<br>';
	echo '<br>';
	
}
 echo '</table></tr></td><br>';
?>
<html>
<head><link rel="stylesheet" type="text/css" href="mystyle.css">
<style>
h1 {
    color: solid green;
    text-align: left;
	}

		button {
				background-color: #FFFFFF;
				color: black;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				width: 150px;
				
		}
</style>
</style>
</head>
<body>
<table>
<tr>
<td>
</tr>
</td>
</table>
<a href="write.php"><button type="button" class="button" style="width:10%">Add Devices to Inventory</button></a>
<br>
<a href="find.php"><button type="button" class="button" style="width:10%">Confirm Device was added to Inventory</button></a>
<br>
<a href="output.php"><button type="button" class="button" style="width:10%">Check All Devices Added to Inventory</button></a>
<br>
<a href="file.csv"><button type="button" class="button" style="width:10%">Download CSV File</button></a>

</body>
</html>
