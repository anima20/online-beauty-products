<?php
session_start();
$con = mysqli_connect("localhost","root","","beauty");
if($con==false)
{
	echo "Error: " . mysqli_connect_error();
}
else{
	if (isset($_POST['save'])) {
		$p_name=$_POST['p_name'];
		$p_desc=$_POST['p_desc'];
		$p_cat=$_POST['p_cat'];
		$p_price=$_POST['p_price'];
		$filename = $_FILES["p_image"]["name"]; 
    $tempname = $_FILES["p_image"]["tmp_name"];     
        $folder = "image/".$filename; 

		$q="insert into product (p_name,p_desc,p_cat,p_price,p_image) values('$p_name','$p_desc','$p_cat',$p_price,'$filename')";
		if(mysqli_query($con,$q))
		{
				header('location: product.php');
		 if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
  }
  else{
  	echo "<script type='text/JavaScript'
				alert('Data didn not submit..!!);
				</script>";}
			// if ($q_run) {
			// 	move_uploaded_file($_FILES["p_image"]["tmp_name"], "upload/".$_FILES["p_image"]["name"]);
			//  	$_SESSION['success']="added";
			// 	echo "vhb";
			// }

		}
	}

?>