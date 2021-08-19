<?php
	$con = mysqli_connect("localhost","root","","beauty");
if($con==false)
{
	echo "Error: " . mysqli_connect_error();
}

else{
	$id=$_GET['delete_id'];
	$q="delete from product where id=$id";
	mysqli_query($con,$q);
	header('location: product.php');

}
				
?>