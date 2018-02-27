
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Result</title>
</head>
<body>
	<div class="container list-group">
		<?php 
// 1.รับค่าจากหน้าที่แล้วซึ่งส่งค่ามาเป็น post
	// $thb = $_POST['attribute name']
	$thb = $_POST['thb'];
	$type = $_POST['type'];

	echo "<br>";
	echo "ค่าที่กรอกคือ ".$thb;
	echo "<br>";
	echo "สกุลเงินที่ใช้คำนวณ ".$type;
	echo "<br>";


	if ($type == "usd") {
		$result = $thb / 31.227;
	}else if ($type == "jyp") {
		$result = $thb / 29.056;
	}else if ($type == "krw") {
		$result = $thb / 0.029;
	}else if ($type == "gbp") {
		$result = $thb / 44.32;
	}else if ($type == "eur") {
		$result = $thb / 38.27;
	}

	echo "Result=".$result;


	// แบบที่2

	// if ($type == "usd") {
	// 	$rate = 0.31;
	// } elseif ($type == "jyp") {
	// 	$rate = 0.31;
	// } elseif ($type == "krw") {
	// 	$rate = 0.0293;
	// } elseif ($type == "gba") {
	// 	$rate
	//  = 0.31;
	// } elseif ($type == "eur") {
	// 	$rate = 0.31;
	// }
	// echo "Result=".$thb*$rate;

	// // แบบที่3
	// switch ($type) {
	// 	case 'usd':
	// 		$rate = 0.31;
	// 		break;
	// 	case 'jyp':
	// 		$rate = 0.31;
	// 		break;
	// 	case 'krw':
	// 		$rate = 0.0293;
	// 		break;
	// 	case 'gba':
	// 		$rate = 0.31;
	// 		break;
	// 	case 'eur':
	// 		$rate = 0.31;
	// 		break;

		
	// 	default:
	// 		$rate = 0;
	// 		break;
	// }
	// echo "Result=".$thb*$rate;

	// echo "Result=".$thb/$rate;
	require 'connect.php';

	$sql = "INSERT INTO exch022_history(thb,calculated,currency) VALUES($thb, $result, '$type')";

	// $sql = "INSERT INTO exch022_history(thb, calculated, currency) VALUES ($thb, $result, $type)";
	$sql_exe = $conn -> query($sql);

	print($sql_exe);


 ?>
 	<table class="table table-striped table-hover">
 		<thead>
 			<tr>
 				<th class="text-center" colspan="5">Exchangerate History</th>
 			</tr>
 			<th>input money</th>
 			<th>currency</th>
 			<th>calculated</th>
 			<th>datetime</th>
 			<th>delete</th>
 		</thead>
	<?php 
	$sql = "SELECT * FROM exch022_history ORDER BY dateRecord DESC";
	$sql_exe = $conn->query($sql);
	echo "<br>";
	while ($row = mysqli_fetch_assoc($sql_exe)) {
		echo "<tr>
 			<td>".$row['thb']."</td>
			<td>"."exchange to ".$row['currency']."</td>"."
			<td> ".$row['calculated']."</td>
			<td>"." on ".$row['dateRecord']."</td>";
 	?>
		<!-- $array['key/field name']; -->
	

	<td><a href="delete.php?id=<?php echo $row['recordID'] ?>&thb=<?php echo $row ['thb']; ?>" class ="btn btn-danger btn-sm"> Delete </a></td>
		

	<?php 
	
	

	}
	
	$conn->close();

	 ?>
	</table>

	 </div>


</body>
</html>