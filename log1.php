
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="log.css">
<script src="sweetalert.min.js"></script>
</head>
<body >
<div class="loginbox" >
	<img src="images/user1.png" class="user">
	<h1>Login Here</h1>
	<form action="log1.php" method="post">
			<p id="user">Username</p>
			<input type="text" placeholder="Enter yor name"  name="u_name" autofocus>
			<p id="user">Password</p>
			<input type="Password" placeholder="Enter Password" name="password"><br>
			<input type="checkbox" name="cb1" value="1">Remember Me &nbsp
			<a href="f_pass.php" >Forget Password</a>

			<input type="submit" value="Login" name="submit">	
			<a href="sign.php">Dont have account?</a>
	</form>	
</div>



<?php
session_start();
	if(isset($_POST['submit']))
	{
	$con = mysqli_connect("localhost","root","","beauty");
		$u_name=$_POST["u_name"];
		$password = $_POST["password"];
		$qy="SELECT u_name,password from signup where u_name='$u_name' And password='$password'";
		if($result=mysqli_query($con , $qy)){
		if(mysqli_num_rows($result)>0){
			if (isset($_POST['cb1']))
				{
				$hour=time() + 3600 * 24 *30;
				setcookie('username',$u_name,$hour);
				setcookie('password',$password,$hour);
				}

			$row=mysqli_fetch_array($result);

				
		$_SESSION['user']=$row['u_name'];
		header('location: p1 (1).php');
	}
	else{

		if ($u_name=="" || $password==""  ) {
	$_SESSION['status']="Any of the feild can'b be blank!!";
			$_SESSION['status_code']="warning";			# code...
		}
		else{

		$_SESSION['status']="Either user name or password is incorrect or you have not rigestered";
			$_SESSION['status_code']="warning";}
	}}
	else {
		echo "Error: " .mysqli_error($con);
	}

	mysqli_close($con);
}

	?>




<?php

if(isset($_SESSION['status']) && ($_SESSION['status'] !=''))
	{
?>
<script type="text/javascript">
		swal({
  title: "<?php echo $_SESSION['status'];  ?>",
  icon: "<?php echo $_SESSION['status_code'];  ?>",
  button: "OK !",

});	
</script>
	<?php
	unset($_SESSION['status']);
}
	?>
	

</body>
</html>