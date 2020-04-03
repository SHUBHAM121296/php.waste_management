<?php
session_start();
if(isset($_SESSION['uid'])){
	header('location:index.php');
}
?>
<html>
  <head>
    <title>
      Sign Up
    </title>
    <link rel="stylesheet" href="../css/login.css" >
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
      .btn-box
      { 
        border-radius: 20px;
  border:1px solid blueviolet;
  background-color: blueviolet;
  color: #FFFFFF;
  font-size:12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing:1px;
  text-transform:uppercase;
      }
    </style>




  </head>
      <body>
        <div class="container" id="container">

          <div class="form-container sign-up-container">
      
            <form action="login.php" method="post" enctype="multipart/form-data">
              <h1>Create Account</h1>
              <br>
            
<table>
<tr><td>Name :</td><td>
<input type="text" name="name" placeholder="name">
</td></tr> <tr><td>Email :</td><td>
<input type="email" name="email" placeholder="email"> 
</td></tr> <tr><td>Password :</td><td>
<input type="password" name="password1" placeholder="password"> 
</td></tr>  <tr><td>Address :</td><td>
<textarea name="add" placeholder="address" > </textarea>
</td></tr> <tr><td>Contact No :</td><td>
<input type="text" name="phone" placeholder="Contact Number"> 
</td></tr> <tr><td>Image :</td><td>
<input type="file" name="simg">
</td></tr>
</table>
<br>
<button type="submit" name="signup">signup</button>
<br>
<div class="btn-box">
  <a href="newhome.html" class="theme-btn btn-style-one">Homepage</a>
  </div>
</form>

<?php
if(isset($_POST['signup'])){
	include("dbcon.php");
	$nam=$_POST['name'];
	$em=$_POST['email'];
	$pass1=$_POST['password1'];
	$qry="INSERT INTO `cust`(`c_name`, `c_pass`, `c_img`, `c_email`, `address`, `c_order`, `c_status`, `c_phone`) VALUES ()";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	if($row<1){
		?>
		<script>
		alert("Wrong Username Or Password");
		</script>
		<?php
	}else{
		session_start();
		$data=mysqli_fetch_assoc($run);
		$id=$data[id];
		$_SESSION['uid']=$id;
		header('location:index.php');
	}
	


}
?>