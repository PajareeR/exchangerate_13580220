<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/style.css">

	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="box">
		<div class="container">
			<form class="thumbnail" action="Calculate-result.php" method="POST" >
				<br>
				<h3>เครื่องคำนวนอัตราแลกเปลี่ยน</h3>
				<div class="form-group">
				<label>ระบุจำนวนเงินที่ท่านต้องการแลกเปลี่ยน</label><br>
				<input class="form-control" type="text" name="thb">
				<label>กรุณาเลือกสกุลเงินที่ท่านมี</label><br>
				<select class="form-control" id="sel1">
				    <option>Thai Baht</option>
				 </select>
				 <label>กรุณาเลือกสกุลเงินที่ท่านต้องการ</label><br>
				<select title="Select your surfboard" class="form-control selectpicker" id="sel1" name="type">
				    <option data-thumbnail="images/usa.png" value="usd">ดอลล่าสหรัฐ USD</option>
				    <option data-thumbnail="exchangerate_13580220/images/japan.png" value="jyp">ญี่ปุ่น JYP</option>
				    <option data-thumbnail="exchangerate_13580220/images/south-korea.png" value="krw">เกาหลีใต้ KRW</option>
				    <option data-thumbnail="exchangerate_13580220/images/england.png" value="gbp">สหราชอาณาจักร GBP</option>
				    <option data-thumbnail="exchangerate_13580220/images/euro.png" value="eur">ยูโรโซน EUR</option>
				 </select>
				 <br>
				 <button class="btn btn-info" type="submit">Calculate</button>
				</div>
			</form>
		</div>
	</div>

</body>
</html>