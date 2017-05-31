<?php
if (isset($_POST['Barcode'])){
$Barcode = $_POST['Barcode'];
$Barcode2 ="{$Barcode},";

$file = 'file.csv';
// get the file contents, assuming the file to be readable (and exist)
$contents = file_get_contents($file);
// escape special characters in the query
$pattern = preg_quote($Barcode2, '/');
// finalise the regular expression, matching the whole line
$pattern = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches
if(preg_match_all($pattern, $contents, $matches)){
   print "Found matches: \n";
   print '<br>';
   $Final = implode($matches[0]);
   $finalarray = explode(',',$Final);
    //Print out my column data.
	print 'Barcode:' . $finalarray[0] . '<br>';
	print 'Device:' . $finalarray[1] . '<br>';
	print 'Required Decommissioning:' . $finalarray[2] . '<br><br>';
        print 'If device was rescanned' . '<br>';
        print 'Required Decommissioning:' . $finalarray[5] . '<br>';

}
else{
	print 'Barcode has not been entered yet';
}
}
?>
<html>
<head>
<style>
h1 {
    color: solid green;
    text-align: left;
	}
body {
    background-color: lightblue;
}

.button {
	margin: auto;
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 45px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 6px;
	position:relative;
    cursor: pointer;
	}
</style>
</head>
<body>
<h1>Find Scanned Device</h1>
<br>
<br>
<Form action="find.php" method="POST">
Barcode:<br>
<input type="text" name="Barcode" autofocus><br><br>
<input type="submit" value="submit" class="button" style="width:10%">
</form>

</body>
</html>


