<?php
session_start();
$con = mysqli_connect("localhost","root","","beauty");
if ($_SESSION['user']=="") 
{
	echo '<script>alert("Need to login")</script>';
				echo '<script>window.location="make_up.php"</script>';
}
else{
if (isset($_POST["submit"])) 
{
		if (isset($_SESSION["shopping_cart"]))
		{
			$item_array_id = array_column($_SESSION["shopping_cart"], "id");
			if (!in_array($_GET["id"], $item_array_id))
			 {
				$count= count($_SESSION["shopping_cart"]);
				$item_array=array(
									'id' => $_GET["id"],
									'p_name' => $_POST["p_name"],
									'p_price' =>$_POST["p_price"],
									'p_qty' => $_POST["p_qty"]
								);
								$_SESSION["shopping_cart"][$count] = $item_array;
			}
			else
			{
				echo '<script>alert("Item Already Added")</script>';
				echo '<script>window.location="make_up.php"</script>';
			}
		}
		else
		{
			$item_array=array(
									'id' => $_GET["id"],
									'p_name' => $_POST["p_name"],
									'p_price' =>$_POST["p_price"],
									'p_qty' => $_POST["p_qty"]
								);
			$_SESSION["shopping_cart"][0] = $item_array;
		}
}

if (isset($_GET["action"])) 
{
	if ($_GET["action"]=="delete")
	{
		foreach ($_SESSION["shopping_cart"] as $key => $value) 
		{
			if ($value["id"]==$_GET["id"]) 
			{
				unset($_SESSION["shopping_cart"][$key]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="make_up.php"</script>';

			}
		}
	}
}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<body style="background-image: url(images/regs6.jpg); opacity: 0.9">
	<h1 style="color: white ; font-family: facon; font-weight: bold ; font-size: 50px ; margin-top: 3%; margin-left: 40% ; margin-bottom: -3% ">MY CART</h1>
<table class="table" style="width: 80%;  margin-top: 5% ; color: white ; font-size: 20px ; margin-left: 10%">
  	<thead class="thead-light">
	<tr>
				      <th scope="col">Name</th>
				      <th scope="col">Qty</th>
				      <th scope="col">Price</th>
				      <th scope="col">Total</th>
				      <th scope="col">Action</th>
	</tr>
				  </thead>
				  <tbody>

		<?php
					if (!empty($_SESSION["shopping_cart"]))
					 {
						$total=0;
						foreach ($_SESSION["shopping_cart"] as $key => $value)
						{
							?>
							<tr>
								<td><?php echo $value["p_name"] ; ?></td>
								<td><?php echo $value["p_qty"] ; ?></td>
								<td>Rs<?php echo $value["p_price"] ; ?></td>
								<td><?php echo number_format($value["p_qty"] * $value["p_price"] , 2); ?></td>
								<td><a href="makeup_cart.php?action=delete&id=<?php echo $value["id"] ; ?>"><span class="text-danger">Remove</span></a></td>
							</tr>
							<?php
								$total=$total + ($value["p_qty"] * $value["p_price"]);
						}
						?>
						<tr>
							<td></td>
							<td></td>
							<td>Total</td>
						<td><?php echo number_format($total, 2); ?></td><td></td>
					</tr>
						<?php
					}
					?>
</table>
</body>
</html>