
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="f_pass.css">
<script src="sweetalert.min.js"></script>
</head>
<body>
<div class="loginbox" >
	<img src="images/user1.png" class="user">
	<h2>Enter Email</h2>
	<form action="" method="post">
			<p id="email">Enter Email</p>
			<input type="text" placeholder="Enter your email "  name="email" autofocus>
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
		$email=$_POST["email"];
		$qy="SELECT email from signup where email='$email'";
		if($result=mysqli_query($con , $qy))
		{
		if(mysqli_num_rows($result)>0)
		{
			$row=mysqli_fetch_assoc($result);
			$_SESSION['email']=$row['email'];
			header('location:c_pass.php');
		}
		else
		{
			echo "<script type='text/JavaScript'>
				alert('Email does not exist!!');
				</script>";
		}
	}
	else
	{
		echo "Error: " .mysqli_error($con);
	}

mysqli_close($con);
}
?>