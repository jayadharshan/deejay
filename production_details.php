<?php 
include('connection.php');

$order_reference=$_GET['order'];

$ap_order_details="select sum(FINAL_SFT_RFT),sum(W_SFT_RFT) from data_entrys where ORDERS='$order_reference' and DEPT='AP'";

$ap_order_details_result=mysqli_query($conn,$ap_order_details);

$ap_sum=mysqli_fetch_array($ap_order_details_result);

if ($ap_sum['sum(FINAL_SFT_RFT)']=="") 
{
	$ap_sum['sum(FINAL_SFT_RFT)']="--";
}
if ($ap_sum['sum(W_SFT_RFT)']=="") 
{
	$ap_sum['sum(W_SFT_RFT)']="--";
}

$mp_order_details="select sum(FINAL_SFT_RFT),sum(W_SFT_RFT) from data_entrys where ORDERS='$order_reference' and DEPT='MP'";
$mp_order_details_result=mysqli_query($conn,$mp_order_details);

$mp_sum=mysqli_fetch_array($mp_order_details_result);

if ($mp_sum['sum(FINAL_SFT_RFT)']=="") 
{
	$mp_sum['sum(FINAL_SFT_RFT)']="--";
}
if ($mp_sum['sum(W_SFT_RFT)']=="") 
{
	$mp_sum['sum(W_SFT_RFT)']="--";
}

$dc_order_details="select sum(FINAL_SFT_RFT),sum(W_SFT_RFT) from data_entrys where ORDERS='$order_reference' and DEPT='DC'";
$dc_order_details_result=mysqli_query($conn,$dc_order_details);

$dc_sum=mysqli_fetch_array($dc_order_details_result);

if ($dc_sum['sum(FINAL_SFT_RFT)']=="") 
{
	$dc_sum['sum(FINAL_SFT_RFT)']="--";
}
if ($dc_sum['sum(W_SFT_RFT)']=="") 
{
	$dc_sum['sum(W_SFT_RFT)']="--";
}

$hp_order_details="select sum(FINAL_SFT_RFT),sum(W_SFT_RFT) from data_entrys where ORDERS='$order_reference' and DEPT='HP'";
$hp_order_details_result=mysqli_query($conn,$hp_order_details);

$hp_sum=mysqli_fetch_array($hp_order_details_result);

if ($hp_sum['sum(FINAL_SFT_RFT)']=="") 
{
	$hp_sum['sum(FINAL_SFT_RFT)']="--";
}
if ($hp_sum['sum(W_SFT_RFT)']=="") 
{
	$hp_sum['sum(W_SFT_RFT)']="--";
}
$ap_order_detail="SELECT SUM(`WR_SFT_RFT`) FROM `w_data` WHERE `ORDERS`='$order_reference' AND `DEPT`='AP'";

$ap_order_detail_result=mysqli_query($conn,$ap_order_detail);

$ap_summ=mysqli_fetch_array($ap_order_detail_result);

$mp_order_detail="SELECT SUM(`WR_SFT_RFT`) FROM `w_data` WHERE `ORDERS`='$order_reference' AND `DEPT`='MP'";

$mp_order_detail_result=mysqli_query($conn,$mp_order_detail);

$mp_summ=mysqli_fetch_array($mp_order_detail_result);

$dc_order_detail="SELECT SUM(`WR_SFT_RFT`) FROM `w_data` WHERE `ORDERS`='$order_reference' AND `DEPT`='DC'";

$dc_order_detail_result=mysqli_query($conn,$dc_order_detail);

$dc_summ=mysqli_fetch_array($dc_order_detail_result);

$hp_order_detail="SELECT SUM(`WR_SFT_RFT`) FROM `w_data` WHERE `ORDERS`='$order_reference' AND `DEPT`='HP'";

$hp_order_detail_result=mysqli_query($conn,$hp_order_detail);

$hp_summ=mysqli_fetch_array($hp_order_detail_result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>production_details</title>
	<style type="text/css">
		body
		{
			background-image: url('img4.jpg');
			background-size: cover;
			color: white;
		}
		table
		{
			padding-right: 10px;
			padding: 5px;
			border: 1px; 
			/*border-style: double;*/ 
			border-radius: 10px 10px;
			width: 45%;
			background-color: rgba(0,0,0,0.1);
			box-shadow: 10px 10px 10px 10px rgba(0,0,0,0.5);
		}
		td
		{
			height: 40px;
		}
		th
		{
			color: red;
			width: 200px;
			height: 40px;
			text-align: left;
		}
		h2
		{
			width: 45%;
			text-shadow: 10px black;
			background-color: rgba(0,0,0,0.1);
			box-shadow: 10px 10px 10px 10px rgba(0,0,0,0.5);
		}
	</style>
</head>
<body>
	<?php include('tab.php'); ?>
	<center><h2>ORDER REFERENCE : <?php echo $order_reference; ?></h2></center>
	<br>
	<center>
	<table>
		<tr><th>JOC</th><td>Completed</td><td></td></tr>
		<tr><th>PPR</th><td>Completed</td><td></td></tr>
		<tr><th>WORK ORDER</th><td>Completed</td><td></td></tr>
		<tr><th>MC</th><td>Completed</td><td></td></tr>
		<tr><th>EC</th><td>Completed</td><td></td></tr>
		<tr><th></th><th>PRO_SFT_RFT</th><th>WO_SFT_RFT</th><th>ORDER SFT_RFT</th></tr>
		<tr><th>AP</th><td><?php echo $ap_sum['sum(FINAL_SFT_RFT)']; ?></td><td><?php echo $ap_sum['sum(W_SFT_RFT)']; ?></td><td><?php echo $ap_summ['SUM(`WR_SFT_RFT`)']; ?></td></tr>
		<tr><th>MP</th><td><?php echo $mp_sum['sum(FINAL_SFT_RFT)']; ?></td><td><?php echo $mp_sum['sum(W_SFT_RFT)']; ?></td><td><?php echo $mp_summ['SUM(`WR_SFT_RFT`)']; ?></td></tr>
		<tr><th>DC</th><td><?php echo $dc_sum['sum(FINAL_SFT_RFT)']; ?></td><td><?php echo $dc_sum['sum(W_SFT_RFT)']; ?></td><td><?php echo $dc_summ['SUM(`WR_SFT_RFT`)']; ?></td></tr>
		<tr><th>HP</th><td><?php echo $hp_sum['sum(FINAL_SFT_RFT)']; ?></td><td><?php echo $hp_sum['sum(W_SFT_RFT)']; ?></td><td><?php echo $hp_summ['SUM(`WR_SFT_RFT`)']; ?></td></tr>
		<tr><th>PACKING</th><td>Completed</td><td></td></tr>
	</table></center>
</body>
</html>