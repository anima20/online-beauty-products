<!DOCTYPE html>
<html>
<head>
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
	<title></title>
</head>
<body style="background-image: url(images/regs6.jpg); opacity: 0.9">

	<br>
	<h1 style="margin-left: 35% ; color: white ; font-family: facon; font-weight: bold ; font-size: 50px">ADMIN PANEL</h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productaddmodel" style="width: 06%; margin-left: 10% ; margin-top: 2% ; margin-bottom: -6%">
  ADD
</button>
<a href="p1 (1).php "><img src="images/home.png" style="width: 06%; margin-left: 0% ; margin-top: 2% ; margin-bottom: -6%; height: 50px"></a>

<table class="table" style="width: 80%; margin-left: 10% ; margin-top: 5% ; color: white ; font-size: 20px">
  					<thead class="thead-light">
				   	  <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Name</th>
				      <th scope="col">Description</th>
				      <th scope="col">Category</th>
				      <th scope="col">Price</th>
				      <th scope="col" style="text-align: center;">Image</th>
				      <th scope="col">EDIT</th>
				      <th scope="col">DELETE</th>
				    </tr>
				  </thead>
				  <tbody>
    <?php
	session_start();
	$con = mysqli_connect("localhost","root","","beauty");
	if($con==false)
	{
		echo "Error: " . mysqli_connect_error();
	}
	else
	{
	$q="select * from product";
	if ($result = mysqli_query($con,$q))
	{
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row = mysqli_fetch_array($result))
			 	{
			 		 

							echo "<tr>";
							echo "<th>" .$row['id']. "</th>";
							echo "<th>" .$row['p_name']. "</th>";
							echo "<th>" .$row['p_desc']. "</th>";
							echo "<th>" .$row['p_cat']. "</th>";
							echo "<th>" .$row['p_price']. "</th>";
							
							?>

							<th>
								<img style="width: 70% ; height: 130px ; margin-left: 70px" src="images/<?php echo $row['p_image']; ?>">
							</th>
						
							<td><button type="button" style="width: 130%" class="btn btn-success" id="edit"><a style="color: white"
								href="edit.php?edit_id=<?php echo $row['id'];?> ">Edit</a></button></td>
							<td><button type="button" class="btn btn-danger" id="delete"><a style="color: white"
								href="delete.php?delete_id=<?php echo $row['id'];?> ">Detete</a></button></td>
							    </tr>	
				<?php
				}
			echo '</tbody>
				</table>';	
				mysqli_free_result($result);		
		}	
		else
		{
			echo "No record found";
		}
	}
	else{
		echo "ERROR:" .mysqli_error($con);
		mysqli_close($con);
		}
}
    ?>

<div class="modal fade" id="productaddmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="product_d.php" method="post" enctype="multipart/form-data">
		      <div class="modal-body">
		      		<div class="form-group">
					    <label >product name</label>
					    <input type="text" class="form-control" placeholder="Enter product name" name="p_name">
					</div>

					<div class="form-group">
					    <label >desc</label>
					    <input type="text" class="form-control"  placeholder="Enter product descrption" name="p_desc">
					</div>

					
					<div class="form-group">
						<label style="margin-top: 0px">Category</label>
										<select name="p_cat" style="width: 100% ; opacity: 0.5">
											<option value="Body Care" >Body Care </option>
											<option value="Face Care">Face Care</option>
											<option value="Deodrants">Deodrants</option>
											<option value="Make Up">Make Up</option>
											<option value="Moisturiser & Lotion">Moisturiser & Lotion</option>
										</select>
					    <!-- <label >Category</label>
					    <input type="text" class="form-control"  placeholder="Enter product descrption" name="p_cat"> -->
					</div>


					<div class="form-group">
					    <label >price</label>
					    <input type="text" class="form-control" placeholder="Enter product price" name="p_price" onkeypress="return onlyNumberKey(event)">
					</div>

					<div class="form-group">
					    <label >upload image</label>
					    <input type="file" class="form-control" id="p_image" name="p_image">
					</div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary" name="save">Save</button>
		      </div>
      </form>
    </div>
  </div>
</div>




<!-- #################################################################################################################### -->



<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="product_d.php" method="post" enctype="multipart/form-data">
		      <div class="modal-body">
		      		<div class="form-group">
					    <label >product name</label>
					    <input type="text" class="form-control" placeholder="Enter product name" name="p_name">
					</div>

					<div class="form-group">
					    <label >desc</label>
					    <input type="text" class="form-control"  placeholder="Enter product descrption" name="p_desc">
					</div>

					<div class="form-group">
					    <label >price</label>
					    <input type="text" class="form-control" placeholder="Enter product price" name="p_price" onkeypress="return onlyNumberKey(event)">
					</div>

					<div class="form-group">
					    <label >upload image</label>
					    <input type="file" class="form-control" id="p_image" name="p_image">
					</div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary" name="save">Save</button>
		      </div>
      </form>
    </div>
  </div>
</div>



<script type="text/javascript">
	function delete()
	{
		alert("fcgvbhjn");
	}
</script>
</body>
</html>