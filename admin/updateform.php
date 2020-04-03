<?php
session_start();
if(isset($_SESSION['uid'])){
	
}else{
	header('location:../login.php');
}
?>
<?php 
include("header.php");
include("title.php");
include("../dbcon.php");
$sid=$_GET['sid'];
$qry="SELECT * FROM `shop` WHERE `id`='$sid'";
$run=mysqli_query($con,$qry);
$data=mysqli_fetch_assoc($run);
?>
<form action="updatedata.php" method="post" enctype="multipart/form-data">
<table align="center" width="40%" border="1">
<tr>
<td>Unique No :</td><td><input type="text" name="rno" value="<?php echo $data['uno']; ?>"></td>
</tr>
<tr>
<td>Name :</td><td><input type="text" name="name" value="<?php echo $data['name']; ?>"></td>
</tr>
<tr>
<td>City :</td><td><input type="text" name="city" value="<?php echo $data['city']; ?>"></td>
</tr>
<tr>
<td>Contact No :</td><td><input type="text" name="pno" value="<?php echo $data['contact']; ?>"></td>
</tr>
<tr>
<td>Password :</td><td><input type="text" name="std" value="<?php echo $data['password']; ?>"></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="hidden" name="sid" value="<?php echo $data['id'];?>"/>
<input type="submit" name="sub" value="update"></td>
</tr>
</table>
</form>
</body>
</html>
