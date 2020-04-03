<?php
session_start();
if(isset($_SESSION['uid'])){
	header('location:disdash.php');
}
?>

<html>
  <head>
    <title>
      Shopkeeper Login
    </title>

    <link rel="stylesheet" href="../css/disloginpage.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs.font-awsome/4.7.0/css/font-awsome.min.css">
	<style>
	.btn-style-one
  {
    border-radius: 20px;
  border:1px solid blueviolet;
  background-color: blueviolet;
  color: #FFFFFF;
  font-size:12px;
  font-weight: bold;
  padding: 13px 45px;
  margin-left:30px;
  letter-spacing:1px;
  text-transform:uppercase;

  }
	</style>
  </head>
  <body>
    <div class="container" id="container">

 
      <div class="form-container sign-up-container">
  
        <form action="distlogin.php" method="post">
          <h1> Sign In</h1>
          <h2>as Shopkeeper</h2>
         
        
        
<input type="text" name="uno" placeholder="unique number">     
<input type="password" name="pass" placeholder="password"> 



<br>
<button type="submit" name="login">Sign In</button>
<br>
<div class="btn-box">
<a href="../index.php" class="theme-btn btn-style-one">Back to Homepage</a>
</div>
</form>
</body>
  
</html>

<?php

include('../dbcon.php');

if(isset($_POST['login'])){
	$user=$_POST['uno'];
	$pasword=$_POST['pass'];
	$qry="SELECT * FROM `shop` WHERE `uno`='$user' AND `password`='$pasword'";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	if($row<1){
		?>
		<script>
			alert('Username or Password is incorrect !!');
			window.open('../login.php','_self');
		</script>
		<?php
	}else{
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
		$_SESSION['uid']=$id;
		header('location:distdash.php');
	}
}


?>