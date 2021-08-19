<?php
$smt = $_POST['nm'];
$con=mysqli_connect("localhost","root","","beauty");
$q="insert into sub (s_email) values ('$smt')";
//$q_run=;
if (mysqli_query($con,$q)) {
	echo $smt . " has been subscribed..!!";
}
else
{
	echo "duplicate value..!!";
}
?>