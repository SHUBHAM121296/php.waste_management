<?php
session_start();
if(isset($_SESSION['uid'])){
	
}
else{
	header('location:../login.php');
}
?>
<?php
	include("header.php");
	include("title.php");
	include("../dbcon.php");
	$sid=$_GET['sid'];
	$a='completed';
	$qry="UPDATE `cust` SET `c_status`='$a' WHERE `id`='$sid'";
	$run=mysqli_query($con,$qry);
	if($run==true){
		?>
		<script>
		alert("status updated successfuly");
		</script>
		<?php
		header('location:pending.php');
	}else{
		?>
		<script>
		alert("There was a problem changing the status");
		</script>
		<?php
		header('location:pending.php');
	}
?>
