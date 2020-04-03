<?php
session_start();
if(isset($_SESSION['uid'])){
	header('location:index.php');
}
?>

<html>
  <head>
    <title>
      Login & Register
    </title>
    <link rel="stylesheet" href="css/login.css" >
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
          <form action="login.php" method="post"> 
   <h2>Sign in</h2> 
    
   
       <input type="email" name="email" placeholder="email"> 
<input type="password" name="password" placeholder="password"> 
<br>
<a href="#">Forgot your password</a>
<br>
<button type="submit" name="submit">Sign In</button><br>
<a href="signup.php" class="theme-btn btn-style-one">Sign up</a><br>
<a href="dist/distlogin.php" class="theme-btn btn-style-one">Login Distributer</a></tb><br><tb><a href="admin/adminlogin.php" class="theme-btn btn-style-one">Login as Admin</a>
<br>
 </form>
    </div>
      </body>
</html>

<?php
if(isset($_POST['submit'])){
	include("dbcon.php");
	$em=$_POST['email'];
	$pass=$_POST['password'];
	$qry="SELECT * FROM `cust` WHERE `c_email` LIKE '$em' AND `c_pass` LIKE '$pass'";
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
