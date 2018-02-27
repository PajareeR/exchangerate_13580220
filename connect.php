<?php 
	// if ($_SERVER['HTTP_HOST']=='locallhost') {
		// $DB_SERVER = 'localhost';
		// $DB_USER_READER = 'root';
		// $DB_PASS_READER = '';
		// $DB_NAME = '22013580_exchangerate';

	// }else {
	// 	// บน imsu
		$DB_SERVER = 'localhost';
		$DB_USER_READER = 'u13580220';
		$DB_PASS_READER = 'u3xNxz6Ui2';
		$DB_NAME = 'db13580220';
	// }
	// คำสั่งที่ใช้ต่อกับฐานข้อมูล
	$conn = new mysqli($DB_SERVER, $DB_USER_READER, $DB_PASS_READER, $DB_NAME);

	// ตรวจสอบว่าต่อสำเร็จมั๊ย

	if ($conn -> connect_error) {
		die("connection failed".$conn -> connect_error);
	}
	mysqli_set_charset($conn,"utf8");



?>