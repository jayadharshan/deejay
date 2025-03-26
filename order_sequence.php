<!DOCTYPE html>
<html>
<head>
	<title>agr_index</title>
	<style type="text/css">
		body
		{
			background-image: url('img1.jpg');
			background-size: cover;
			color: white;
		}
		#tableContainer 
		{
			display:inline-flex;
			padding: 5px;
			height: 60%;
			overflow: auto;
			width: 100%;
		}
		#tableContainer 
		{
			display:flex;
			width: 100%;
		}
		.table
		{
			padding: 10px;
			height: 60%;
			width: 50%;
			margin: 1px;
		}
		.scrollit
		{
			overflow-y: scroll;
    		height: 650px;
   		}
		thead
		{
			position: center;
		}
		table
		{
			padding: 5px;
			border: 1px; 
			/*border-style: double;*/ 
			border-radius: 10px 10px;
			width: 100%;
			background-color: rgba(0,0,0,0.1);
			box-shadow: 10px 10px 10px 10px rgba(0,0,0,0.5);
		}
		th
		{
			width: 25px;
			height: 40px;
			text-align: center;
		}
		tr
		{
			height:35px;
		}
		td
		{
			text-align: center;
		}
		a
		{
			color:red;
		}
		a:hover
		{
			background-color: white;
			text-decoration: none;
			margin: 8px;
		}
		#tbh
		{
			display: flex;
			width: 100%;
		}
		.tbh
		{
			padding-right: 10px;
			padding-left: 10px;
			padding-top: 5px;
			padding-bottom: 1px;
			height: 40%;
			width: 50%;
			margin: 3px;
			text-align: right;
		}
	</style>
</head>	
	<body>
	<?php include('tab.php'); ?>	
	<center><h1>WEEK WISE ORDER SEQUENCE</h1></center>
	<div id="tbh">
	<div class="tbh">
	<table>
		<thead><th>PLANT_1</th></thead>
		<th>MONTH</th><th>WEEK</th><th>ORDERS</th><th>PRO_DATE</th><th>STUFF_DATE</th></table></div>
		<div class="tbh">
		<table><thead><th>PLANT_2</th></thead>
		<thead><th>MONTH</th><th>WEEK</th><th>ORDERS</th><th>PRO_DATE</th><th>STUFF_DATE</th></thead></table></div></div>
	<div id="tableContainer">
		<div class="table">
		<div class="scrollit">
		<table>
			<tbody>
				<?php
					include('connection.php');

					$shipment_data="select * from shipment_plans order by MONTH, WEEKS ASC";

					$shipment_result=mysqli_query($conn,$shipment_data);

					while ($row=mysqli_fetch_assoc($shipment_result)) 
					{
						echo '<tr><td>'.$row['MONTH'].'</td><td>'.$row['WEEKS'].'</td><td><a href="production_details.php?order='.$row['PLANT_1'].'">'.$row['PLANT_1'].'</a></td><td>'.$row['PRO_DATE'].'</td><td>'.$row['STUFF_DATE'].'</td></tr>';
					}
				?>
			</tbody>
		</table>
		</div>
	</div>
		</body>
	
	<body>
		<div class="table">
		<div class="scrollit">
		<table>
			<tbody>
				<?php
					include('connection.php');

					$shipment_data="select * from shipment_plans order by MONTH, WEEKS ASC";

					$shipment_result=mysqli_query($conn,$shipment_data);

					while ($row=mysqli_fetch_assoc($shipment_result)) 
					{
						echo '<tr><td>'.$row['MONTH'].'</td><td>'.$row['WEEKS'].'</td><td><a href="production_details.php?order='.$row['PLANT_2'].'">'.$row['PLANT_2'].'</a></td><td>'.$row['PRO_DATES'].'</td><td>'.$row['STUFF_DATES'].'</td></tr>';
					}
				?>
			</tbody>
		</table>
		</div>
	</div>
	</body>
</html>