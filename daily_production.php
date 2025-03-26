<?php
 include('connection.php');
 ?>
 <?php
 // echo date("Y-m-d");

$ap_order_details="select sum(FINAL_SFT_RFT),DATE from data_entrys where DEPT='AP' and DATE=date('Y-m-d')";
$ap_order_details_result=mysqli_query($conn,$ap_order_details);

$ap_sum=mysqli_fetch_array($ap_order_details_result);

if ($ap_sum['sum(FINAL_SFT_RFT)']=="") 
{
	$ap_sum['sum(FINAL_SFT_RFT)']="--";
}

$mp_order_details="select sum(FINAL_SFT_RFT) from data_entrys where DEPT='MP'";
$mp_order_details_result=mysqli_query($conn,$mp_order_details);

$mp_sum=mysqli_fetch_array($mp_order_details_result);

if ($mp_sum['sum(FINAL_SFT_RFT)']=="") 
{
	$mp_sum['sum(FINAL_SFT_RFT)']="--";
}

$dc_order_details="select sum(FINAL_SFT_RFT) from data_entrys where DEPT='DC'";
$dc_order_details_result=mysqli_query($conn,$dc_order_details);

$dc_sum=mysqli_fetch_array($dc_order_details_result);

if ($dc_sum['sum(FINAL_SFT_RFT)']=="") 
{
	$dc_sum['sum(FINAL_SFT_RFT)']="--";
}

$hp_order_details="select sum(FINAL_SFT_RFT) from data_entrys where DEPT='HP'";
$hp_order_details_result=mysqli_query($conn,$hp_order_details);

$hp_sum=mysqli_fetch_array($hp_order_details_result);

if ($hp_sum['sum(FINAL_SFT_RFT)']=="") 
{
	$hp_sum['sum(FINAL_SFT_RFT)']="--";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>daily_prodution</title>
	<style type="text/css">
		body
		{
			background-image: url('img22.jpg');
			background-size: cover;
			color: white;
		}
		table
		{
			padding: 5px;
			border: 1px; 
			/*border-style: double;*/ 
			border-radius: 10px 10px;
			width: 30%;
			background-color: rgba(0,0,0,0.1);
			box-shadow: 10px 10px 10px 10px rgba(0,0,0,0.5);
		}
		th
		{
			width: 200px;
			height: 40px;
			text-align: left;
		}
	</style>
</head>
<body>
	<?php include('tab.php'); ?>
	<h2>DAILY PRODUCTION</h2>
	<br>
	<table>
		<tr><th></th><th>PRO_SFT_RFT</th></tr>
		<tr><th>AP</th><td><?php echo $ap_sum['sum(FINAL_SFT_RFT)']; ?></td></tr>
		<tr><th>MP</th><td><?php echo $mp_sum['sum(FINAL_SFT_RFT)']; ?></td></tr>
		<tr><th>DC</th><td><?php echo $dc_sum['sum(FINAL_SFT_RFT)']; ?></td></tr>
		<tr><th>HP</th><td><?php echo $hp_sum['sum(FINAL_SFT_RFT)']; ?></td></tr>
	</table>
</body>
</html>