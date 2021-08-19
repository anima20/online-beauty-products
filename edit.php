
<?php
	$con = mysqli_connect("localhost","root","","beauty");
	if($con==false)
	{
		echo "Error: " . mysqli_connect_error();
	}
	else
	{
		if(isset($_GET['edit_id']))
		{
			$edit=$_GET["edit_id"];
			// echo $edit ;
			$q="select * from product where id ='$edit' ";
			$result = mysqli_query($con,$q);
			$row=mysqli_fetch_array($result);
			//print_r ($row);
		}
		if(isset($_POST['update']))
		{
			
		$p_name=$_POST['p_name'];
		
		$p_desc=$_POST['p_desc'];
		$p_cat=$_POST['p_cat'];
		$p_price=$_POST['p_price'];
		// $filename = $_FILES["p_image"]["name"]; 
 		//$tempname = $_FILES["p_image"]["tmp_name"];     
  		//$folder = "image/".$filename; 
        $update="update product set p_name='$p_name',p_desc ='$p_desc',p_cat ='$p_cat' ,p_price = $p_price where id=". $_GET['edit_id'] ;
        $up= mysqli_query($con,$update);
        if ($up) {
				echo "<script type='text/JavaScript'>
		 	window.location.href='product.php';
		 	alert('successfully Edited!');
				
			 	</script>";
			        	
        }
        if(! isset($q))
        {
        	die("Error " . mysqli_connect_error());
        }
        // if (move_uploaded_file($tempname, $folder)) 
        // { 
        //     $msg = "Image uploaded successfully"; 
        // }
		}
			// echo "<script type='text/JavaScript'>
			// 	window.location.href='product.php';
			// 	alert('Any of the feild cant be empty');
			// 	</script>";		
	}				
?>
<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" type="text/css" href="edit.css"> -->
	<style type="text/css">
		#main{
	margin: 10% 10% 10% 35%;
}

#sub{
	margin-top: 1%;
}

#lab{
	width: 130px;
	color: white;
	font-size: 18px;
}
#text{
	width: 40%;
	opacity: 0.6;
}
	</style>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script> 
	

    function onlyNumberKey(evt) { 
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
    } 
</script> 
	<title> </title>
</head>
<body style="background-image: url(images/regs6.jpg); opacity: 0.9">
<div id="main"  >
	<h1 style="color: white ; margin-left: 14%">Edit Product</h1><br>
	 <form method="post">
	<div id="sub">
		<label id="lab" >product name</label>
		<input type="text" placeholder="Enter product name" name="p_name" id="text" value="<?php echo $row['p_name']; ?> ">
	</div>

	<div id="sub">
		<label  id="lab">desc</label>
		<input type="text" placeholder="Enter product descrption" name="p_desc" id="text" value="<?php echo $row['p_desc']; ?>">
	</div>

					
	<div id="sub">
		<label style="margin-top: 0px ; color: white ; width: 130px;">qty:</label>
		<select name="p_cat" value="<?php echo $row['p_desc']; ?>" style="width: 40% ; opacity: 0.5">
		<option value="Body Care" >Body Care </option>
		<option value="Face Care">Face Care</option>
		<option value="Deodrants">Deodrants</option>
		<option value="Make Up">Make Up</option>
		<option value="Moisturiser & Lotion">Moisturiser & Lotion</option>
		</select>
	</div>


	<div id="sub">
		<label id="lab" >price</label>
		<input type="text" placeholder="Enter product price" name="p_price" id="text" onkeypress="return onlyNumberKey(event)" value="<?php echo $row['p_price']; ?>">
	</div>

	<!-- <div id="sub">
		<label >upload image</label>
		<input type="file" id="p_image" name="p_image">
	</div> -->
	
	<div id="sub"  style="margin-top: 10px">
      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button> -->
      <button type="submit" class="btn btn-primary" name="update" id="update" style="width: 58%" onclick="update()">Save</button>
	
	</div>

</div>

<script>
	function update()
	{
	var x;
	if (confirm("success")==true) {
		x="update";
	}
	}
</script>
</body>
</html>