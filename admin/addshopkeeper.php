<?php 
session_start();
if(isset($_SESSION['uid'])){
	
}else{
	header('location:../login.php');
}
?>
<?php 
include('header.php');
include('title.php');
?>
<form action="addshopkeeper.php" method="post" enctype="multipart/form-data">
<table align="center" width="40%" border="1">
<tr>
<td>Unique No :</td><td><input type="text" name="rno" placeholder="Roll number" required></td>
</tr>
<tr>
<td>Name :</td><td><input type="text" name="name" placeholder="Ravi" required></td>
</tr>
<tr>
<td>City :</td><td><input type="text" name="city" placeholder="Ahmedabad" required></td>
</tr>
<tr>
<td>Contact No :</td><td><input type="text" name="pno" placeholder="phone number" required></td>
</tr>
<tr>
<td>Password :</td><td><input type="password" name="std" placeholder="class" required></td>
</tr>
<tr>
<td>Image :</td><td><input type="file" name="simg" required></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="sub" value="upload"></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['sub'])){
	include("../dbcon.php");
	
	$rolno=$_POST['rno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pno=$_POST['pno'];
	$std=$_POST['std'];
	$imgname=$_FILES['simg']['name'];
	$tempname=$_FILES['simg']['tmp_name'];
	move_uploaded_file($tempname,"../docimages/$imgname");
	$qry="INSERT INTO `shop`(`uno`, `name`, `password`, `image`, `city`,`contact`) VALUES ('$rolno','$name','$std','$imgname','$city','$pno')";
	$run=mysqli_query($con,$qry);
	if($run==true){
		?>
		<script>
		alert("Data Inserted");
		</script>
		<?php
	}
}
?>
</body>
</html>
