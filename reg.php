<?php

if(isset($_POST['submit']))
{

$con = mysqli_connect("localhost","root","","beauty");
if($con==false)
{
	echo "Error: " . mysql_connect_error();
}
else{
	$u_name=$_POST["name1"];
	$password1 = $_POST["password1"];
	$password2 = $_POST["c_password1"];
 	$email=$_POST["email1"];
	$number = $_POST["number1"];
	$account->register($u_name,$email,$password1,$password2);

	// if($u_name=="" || $password=="" || $c_password=="" || $email=="" || $number=="" )
	// {
	// 	echo "<script type='text/JavaScript'>
	// 			alert('Any of the feild cant be empty');
	// 			</script>";
	// }
// 	$q = "select * from signup where email = '$email' ";
// 	$result = mysqli_query($con, $q);
// 	$num = mysqli_num_rows($result);
// 	if ($num == 1)
// 	{	//not to dulicate the email
// 		// echo '<script>';
// 		// echo 'alert("duplicate")';
// 		// echo 'window.location.href="log.html"';
// 		// echo '</script>';

// 	}
// 	else
// 	{
	$qy="insert into signup(u_name ,email , number, password) values ('$u_name' ,'$email' , $number , '$password1') ";
	header('location:log.html');
	mysqli_query($con , $qy);
	mysqli_close($con);
}
}
?>
