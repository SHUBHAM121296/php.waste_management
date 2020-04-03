<?php
session_start();
if(isset($_SESSION['uid'])){
	
}else{
	header('location:../login.php');
}
?>
<?php
	include("../dbcon.php");
	$id=$_POST['sid'];
	$rolno=$_POST['rno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pno=$_POST['pno'];
	$std=$_POST['std'];
	$qry="UPDATE `shop` SET `uno`='$rolno',`name`='$name',`city`='$city',`contact`='$pno',`password`='$std' WHERE `id`='$id'";
	$run=mysqli_query($con,$qry);
	if($run==true){
		?>
		<script>
		alert("Data Updated");
		</script>
		<?php
		header('location:updatedata.php');
	}
?>