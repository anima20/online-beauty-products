<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color: black;">
<div class="row mt-3 " style="margin-left: -25px;">
			<?php
			$pname = $_POST['element'];
				$con = mysqli_connect("localhost","root","","beauty");
				$q = "select * from product where p_name='$pname' ";

				
				$q_run=mysqli_query($con,$q);
				$check_product=mysqli_num_rows($q_run)>0;
				if ($check_product) 
				{
					while ($row=mysqli_fetch_assoc($q_run)) 
					{
						?>
							<div class="col-md-3 mt-3" style="margin-left: 40px" >
								<form action="body_cart.php?action=add&id=<?php echo $row["id"] ; ?>" method="post" >
								<img src="image/<?php echo $row['p_image']; ?>" width="90%" height="200px" alt="Product Images">
								<div class="card" style="background-color: grey ; text-align: center; opacity: 0.8 ; width: 90% ;">
									<div class="card-body" style="width:90% ;  text-align: center; height:150px ; margin-top: -15px">
										<label class="card-title" style="font-weight: bold; font-size: 17px; margin-bottom: 	0px"><?php echo $row['p_name']; ?></label><br>
										<label class="card-text" style="margin-top: -50px; font-size: 15 px;margin-bottom: 3px"><?php echo $row['p_desc']; ?></label><br>
										<label class="card-title" style="margin-top:-10%; font-weight: bold;">Rs.<?php echo $row['p_price']; ?></label><br>
										<label style="margin-top: 0px">qty:</label>
										<input type="text" name="p_qty" style="width: 20%" value="1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
										<input type="hidden" name="p_name" value="<?php echo $row['p_name']; ?>">
										<input type="hidden" name="p_price" value="<?php echo $row['p_price']; ?>">
										<input type="submit" name="submit" value="Add to Cart">
									</div>
								</div>
								</form>	
							</div>

						<?php

						
					}
				}
				else
				{
					echo "No product found";
				}

			?>
			
		
	</div>
	
</div>
</body></html>
























