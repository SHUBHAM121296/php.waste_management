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
    <link rel="stylesheet" href="css/signup.css" >
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
        <br>
        <div class="container" id="container">

          
     <br>
            <form action="signup.php" method="post" enctype="multipart/form-data">
              <h1>Create Account</h1>
              <br>
           
<table>
<tr><td><span>Name :</span></td><td>
<input type="text" name="name" placeholder="name">
</td></tr> <tr><td><span>Email :</span></td><td>
<input type="email" name="email" placeholder="email">
</td></tr> <tr><td><span>Password :</span></td><td>
<input type="password" name="password1" placeholder="password">
</td></tr>  <tr><td><span>Address :</span></td><td>
<textarea name="add" placeholder="address" > </textarea>
</td></tr> <tr><td><span>Contact No :</span></td><td>
<input type="text" name="phone" placeholder="Contact Number">
</td></tr> <tr><td><span>Image :</span></td><td>
<input type="file" name="simg">
</td></tr>
</table>
<br>
<button type="submit" name="signup">signup</button>
<br>

  <a href="index.php" class="theme-btn btn-style-one">Back to HomeScreen</a>
    </div>

</form>
      </body>
</html>



<?php
if(isset($_POST['signup'])){
	include("dbcon.php");
	$nam=$_POST['name'];
	$em=$_POST['email'];
	$pass1=$_POST['password1'];
	$add=$_POST['add'];
	$phone=$_POST['phone'];
	$imgname=$_FILES['simg']['name'];
	$tmname=$_FILES['simg']['tmp_name'];
	move_uploaded_file($tmname,"docimages/$imgname");
	$qry="INSERT INTO `cust`(`c_name`, `c_pass`, `c_img`, `c_email`, `address`, `c_phone`) VALUES ('$nam','$pass1','$imgname','$em','$add','$phone')";
	$run=mysqli_query($con,$qry);
	if($run==true){
		$qyr1="SELECT `id` FROM `cust` WHERE `c_pass` LIKE '$pass1' AND `c_email` LIKE '$em'";
		$run2=mysqli_query($con,$qyr1);
		$data=mysqli_fetch_assoc($run2);
		session_start();
		$asd=$data['id'];
		$_SESSION['uid']=$asd;
		header('location:index.php');
	}else{
		?>
		<script>
		alert("There was an error while uploading the details");
		</script>
		<?php
	}
}
?>