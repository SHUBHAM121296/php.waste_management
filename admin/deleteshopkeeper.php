<?php 
session_start();
if(isset($_SESSION['uid'])){
	
}else{
	header('location:../login.php');
}
?>
<?php 
include("header.php");?>
<?php
include("title.php");
?>
<form action="deletestudent.php" method="post">
<table align="center" width="80%">
<tr>
<td align="right">Enter Standard :</td><td><input type="text" name="std"></td><td align="right">Enter Name :</td>
<td><input type="text" name="nam"></td>
<td><input type="submit" value="Search" name="search"></td>
</tr>
</table>
</form>
<table align="center" width="80%" border="1">
<tr style=" background:black; color:white;">
<th>Id</th><th>Image</th><th>Roll No.</th><th>Name</th><th>Edit </th>
</tr>
<?php
if(isset($_POST['search'])){
	include("../dbcon.php");
	$name=$_POST['nam'];
	$std=$_POST['std'];
	$qry="SELECT * FROM `student` WHERE `name` LIKE '%$name%' AND `standard`='$std' ";
	$run=mysqli_query($con,$qry);
	if(mysqli_num_rows($run)<1){
		?>
		<script>
		alert ("No record found");
		</script>
		<?php
	}else{
		$count=0;
		while($data=mysqli_fetch_assoc($run)){
			$count++;
		?>
		<tr>
		<td><?php echo $count ?></td>
		<td><img src="../docimages/<?php echo $data['image']; ?>" style="max-width:100px;"></td>
		<td><?php echo $data['rollno']; ?></td>
		<td><?php echo $data['name']; ?></td>
		<td>Edit</td>
		</tr>
		<?php
		}
	}
}
?>
</table>