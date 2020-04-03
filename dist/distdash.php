<?php 
session_start();
if(isset($_SESSION['uid'])){
	
}else{
	header('location:../login.php');
}
?>
<?php 
include('header.php');
?>
<div class="admintitle">
<h3 align="right" margin-right="10px"><a href="../logout.php">logout</a></h3>
<h1 align="center">Welcome to Admin Dashboard</h1>
</div>
<div>
<table align="center" border="1" width="40%">
<tr>
<td><a href="pending.php">Pending Requests</a>
</td>
</tr>
<tr>
<td><a href="completed.php">Completed Request</a>
</td>
</tr>
</table>
</div>
<br><br>
<div align="center">
<a href="cadmin.php">change password</a>
</div>
</body>
</html>
