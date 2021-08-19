<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="c_pass.css">
<script src="sweetalert.min.js"></script>
</head>
<body >
<div class="loginbox" >
	<img src="images/user1.png" class="user">
	<h1>Confirm Password</h1>
	<form action="" method="post">
			<p id="user">Password</p>
			<input type="text" placeholder="Enter yor name"  name="password" autofocus>
			<p id="user">Conform Password</p>
			<input type="Password" placeholder="Enter Password" name="c_password"><br>
			<input type="submit" value="submit" name="submit">	
	</form>	
</div>
</body>
</html>

<?php
session_start();
if(isset($_POST['submit']))
	{
	$con = mysqli_connect("localhost","root","","beauty");
	$password=$_POST['password'];
	$c_password=$_POST['c_password'];
	$email=$_SESSION['email'];
	if(! $password=="" || $c_password=="")
	{
		$qy="update signup set password='$password' where email='$email'";
	if($result=mysqli_query($con , $qy))
		{
			header('location:log1.php');	
		}
		else
		{
			echo "Error: " .mysqli_error($con);
	}	
	}
	else
	{
		echo "<script type='text/JavaScript'>
				alert('Any of the feild cant be empty');
				</script>";	
	}
}
?>




