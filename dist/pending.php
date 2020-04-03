<?php
session_start();
if(isset($_SESSION['uid'])){
	//header('location:dash.php');
	include("header.php");
	include("title.php");
	?>

<table align="center" width="80%" border="1">
<tr style=" background:black; color:white;">
<th>No.</th><th>Name</th><th>Image</th><th>Address</th><th>Contact No</th><th>Change Status</th>
</tr>
<?php
	$id=$_SESSION['uid'];
	include("../dbcon.php");
	$qry="SELECT * FROM `shop` WHERE `id`='$id' ";
	$run=mysqli_query($con,$qry);
	if(mysqli_num_rows($run)<1){
		?>
		<script>
		alert ("No record found");
		</script>
		<?php
	}else{
		$data=mysqli_fetch_assoc($run);
		$sss=$data['uno'];
		$qry2="SELECT `id`, `c_name`, `c_img`, `address`, `c_phone` FROM `cust` WHERE `c_order`='$sss' AND `c_status`LIKE 'pending' ";
		$run2=mysqli_query($con,$qry2);
	if(mysqli_num_rows($run2)<1){
		?>
		<script>
		alert ("No record found");
		</script>
		<?php
	}else{
		$count=0;
		while($data2=mysqli_fetch_assoc($run2)){
			$count++;
		?>
		<tr>
		<td><?php echo $count ?></td>
		<td><?php echo $data2['c_name']; ?></td>
		<td><img src="../docimages/<?php echo $data2['c_img']; ?>" style="max-width:100px;"></td>
		<td><?php echo $data2['address']; ?></td>
		<td><?php echo $data2['c_phone']; ?></td>
		<td><a href="updatestatus.php?sid=<?php echo $data2['id']; ?>">Change status</a></td>
		</tr>
		<?php
		}
	}
	}
?>
</table>
	
	<?php
}else{
	header('location:../login.php');
}
?>
