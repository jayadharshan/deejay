<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<style type="text/css">
		body
		{
			background-image: url('img4.jpg');
			background-size: cover;
			color: white;
		}
	
		tr,td
		{
			padding: 5px;
			margin: 5px;
		}
		#form
		{
			padding-top: 30px;
			padding-left: 20px;
		}
		#form_head
		{
			text-align: center;
		}
		input
		{
			width: 100px;
		}
		form
		{
			padding: 5px;
			border: 1px; 
			/*border-style: double;*/ 
			border-radius: 10px 2px;
			width: 30%;
			background-color: rgba(0,0,0,0.1);
			box-shadow: 10px 10px 10px 10px rgba(0,0,0,0.5);
		}
		#sbtn
		{
			background-color: green;
			color: white;
			border-radius: 5px;
			box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.5);
			padding-left: 10px;
			padding-right: 10px;
		}
		#sbtn:hover
		{
			background-color: blue;
		}
	</style>
</head>
<body>
	<?php include('tab.php'); ?>
	<div id="form">
		<form>
			<div id="form_head"><h3>ORDER SEQUENCE</h3></div>
			<table>
				<tr><td><label>MONTH</label></td><td><input type="text" name="month"></td></tr>
				<tr><td><label>WEEK</label></td><td><input type="text" name="week"></td></tr>
				<tr><td><label>PLANT-1</label></td><td><input type="text" name="plant_1"></td></tr>
				<tr><td><label>PRO-DATE</label></td><td><input type="date" name="pro_date"></td></tr>
				<tr><td><label>STUFF-DATE</label></td><td><input type="date" name="stuff_date"></td></tr>
				<tr><td><label>PLANT-2</label></td><td><input type="text" name="plant_2"></td></tr>
				<tr><td><label>PRO-DATE</label></td><td><input type="date" name="pro_dates"></td></tr>
				<tr><td><label>STUFF-DATE</label></td><td><input type="date" name="stuff_dates"></td></tr>
				<tr><td></td><td><input type="submit" name="save" id="sbtn" formaction="data_entry.php" value="SAVE"></td></tr>
			</table>
		</form>
	</div>
</body>
</html>
<?php
	include('connection.php');
	if(isset($_GET['save']))
	{
		$month=$_GET['month'];
		$week=$_GET['week'];
		$plant_1=$_GET['plant_1'];
		$pro_date=$_GET['pro_date'];
		$stuff_date=$_GET['stuff_date'];
		$plant_2=$_GET['plant_2'];
		$pro_dates=$_GET['pro_dates'];
		$stuff_dates=$_GET['stuff_dates'];

		$insert_form_data="insert into `shipment_plans` (`MONTH`, `WEEKS`, `PLANT_1`, `PRO_DATE`, `STUFF_DATE`, `PLANT_2`, `PRO_DATES`, `STUFF_DATES`) values ('$month', '$week', '$plant_1', '$pro_date', '$stuff_date', '$plant_2', '$pro_dates', '$stuff_dates')";
		$insert_form_data_result=mysqli_query($conn,$insert_form_data);

		echo '<script> alert("SAVED SUCCESSFULLY.");</script>';
	}
?>