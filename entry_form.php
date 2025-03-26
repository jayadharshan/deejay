<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<style type="text/css">
		body
		{
			background-image: url('img8.png');
			background-size: cover;
			color: white;
		}
	
		tr,td
		{
			padding: 5px;
			margin: 5px;
		}
		#forms
		{
			padding-top: 30px;
			padding-left: 20px;
		}
		#form_heads
		{
			text-align: left;
			border-radius: 5px;
			box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.5);
			padding-left: 10px;
			padding-right: 10px;
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
		#sbtns:hover
		{
			background-color: blue;
		}
		#tabs
		{
			width: 200%;
			display: flex;

		}
		.butn
		{
			padding: 8px;
			background-color: white;
			margin: 8px;
			border-radius: 30px 30px 2px 2px;
			box-shadow: 2px 2px rgba(0,0,0,0.5);
		}
		a
		{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<?php include('tab.php'); ?>
	<div id="forms">
		<div id="form_heads"><h2>PRODUCTION ENTRY</h2></div>

		<div id="tabs">

		<div class="butn">
			<a href='mc_entry.php'>Main Cutting</a>
		</div>
		<div class="butn">
			<a href='ec_entry.php'>Edge Cutting</a>
		</div>
		<div class="butn">
			<a href='ap_entry.php'>Auto Polish</a>
		</div>
		<div class="butn">
			<a href='mp_entry.php'>Machine Polish</a>
		</div>
		<div class="butn">
			<a href='dc_entry.php'>Dry Cutting</a>
		</div>
		<div class="butn">
			<a href='hp_entry.php'>Hand Polish</a>
		</div>
	</div>
		<form>
			<table>
				<tr><td><label>DATE</label></td><td><input type="date" name="date"></td></tr>
				<tr><td><label>MC OPERATORS</label></td><td><input type="double" name="mc_opt"></td></tr>
				<tr><td><label>EC OPERATORS</label></td><td><input type="double" name="ec_opt"></td></tr>
				<tr><td><label>AP OPERATORS</label></td><td><input type="double" name="ap_opt"></td></tr>
				<tr><td><label>MP OPERATORS</label></td><td><input type="double" name="mp_opt"></td></tr>
				<tr><td><label>HP OPERATORS</label></td><td><input type="double" name="hp_opt"></td></tr>
				<tr><td><label>GS OPERATORS</label></td><td><input type="double" name="gs_opt"></td></tr>
				<tr><td><label>WS OPERATORS</label></td><td><input type="double" name="ws_opt"></td></tr>
				<tr><td></td><td><input type="submit" name="save" id="sbtns" formaction="entry_form.php" value="SAVE"></td></tr>
			</table>
		</form>
	</div>
</body>
</html>
<?php include('connection.php');
	if(isset($_GET['save']))
	{
		$months=$_GET['month'];
		$week=$_GET['week'];
		$plant_1=$_GET['plant_1'];
		$pro_date=$_GET['pro_date'];
		$stuff_date=$_GET['stuff_date'];
		$plant_2=$_GET['plant_2'];
		$pro_dates=$_GET['pro_dates'];
		$stuff_dates=$_GET['stuff_dates'];

		$insert_form_data="insert into `Production_Data` (`MONTH`, `WEEKS`, `PLANT_1`, `PRO_DATE`, `STUFF_DATE`, `PLANT_2`, `PRO_DATES`, `STUFF_DATES`) values ('$month', '$week', '$plant_1', '$pro_date', '$stuff_date', '$plant_2', '$pro_dates', '$stuff_dates')";
		$insert_form_data_result=mysqli_query($conn,$insert_form_data);

		echo '<script> alert("SAVED SUCCESSFULLY.");</script>';
	}
?>