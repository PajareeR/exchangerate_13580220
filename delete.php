<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container">
<?php 

	require 'connect.php';
	$id = $_REQUEST['id'];
	$thb = $_REQUEST['thb'];


	$sql = "DELETE FROM exch022_history WHERE recordID = $id";

	$sql_exe = $conn -> query($sql);

	if ($sql_exe) {
		echo "Delete complete "; 
		echo "<br>";
		echo "Delete ID".$id;
		echo "THB = ".$thb;

		// header("location:index.php");
	}else {
		echo "Delete failed"; 
	}
		


?>

	</div>


</body>
</html>