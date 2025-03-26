<!DOCTYPE html>
<html>
<head>
	<title>hp_entry_form</title>
<style type="text/css">
		body
		{
			background-image: url('img12.png');
			background-size: cover;
			color: white;
		}
	
		tr
		{
			width: 50px;
			height: 50px;
		}
		td
		{
			padding: 5px;
			margin: 5px;
			height: 50px;
		}
		#forms
		{
			padding-top: 30px;
			padding-left: 20px;
		}
		#form_heads
		{
			text-align: center;
			padding-top: 30px;
			border-radius: 5px;
			box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.5);
			padding-left: 20px;
			width: 80%;
			height: 50px;
		}
		form
		{
			padding: 5px;
			border: 1px; 
			/*border-style: double;*/ 
			border-radius: 10px 2px;
			width: 80%;
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
			width: 50%;
			text-align: center;

		}
		.butn
		{

			padding left: : 30px;
			background-color: purple;
			margin: 10px;
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

		<div id="form_heads"><h2>Hand Polish Data Entry</h2></div>

	<div id="forms">
		<form>
			<table>
				<tr><td><label>Date</label></td><td><?php echo date("d-m-Y");?></td></tr>
				<tr><td><label>Operator Name</label></td><td><input type="varchar" name="opt_name"></td></tr>
				<tr><td><label>Code</label></td><td><input type="double" name="code"></td><td><label>Height</label></td><td><input type="double" name="ht"></td><td></td>
				<td><label>Width</label></td><td><input type="double" name="wd"></td><td></td>
				<td><label>Depth</label></td><td><input type="double" name="dt"></td></tr>
				<tr><td><label>Order</label></td><td><input type="double" name="order"></td></tr>
				<tr><td><label>Work</label></td><td><button type="button">100-Polish</button></td><td><button type="button">100-400</button></td><td><button type="button">400-Polish</button></td><td><button type="button">Plate</button></td></tr>
				<tr><td><label>Height</label></td><td><input type="double" name="ht"></td><td></td></tr>
				<td><label>Width</label></td><td><input type="double" name="wd"></td><td></td></tr>
				<tr><td><label>Depth</label></td><td><input type="double" name="dt"></td></tr>
				<tr><td></td><td><input type="submit" name="save" id="sbtns" formaction="hp_entry.php" value="Save"></td></tr>
			</table>
		</form>
	</div>
	<div id="tabs">

		<div class="butn">
			<a href='entry_form.php'>Back</a>
		</div>
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

		$insert_form_data="insert into `hp_data` (`MONTH`, `WEEKS`, `PLANT_1`, `PRO_DATE`, `STUFF_DATE`, `PLANT_2`, `PRO_DATES`, `STUFF_DATES`) values ('$month', '$week', '$plant_1', '$pro_date', '$stuff_date', '$plant_2', '$pro_dates', '$stuff_dates')";
		$insert_form_data_result=mysqli_query($conn,$insert_form_data);

		echo '<script> alert("SAVED SUCCESSFULLY.");</script>';
	}
?>