<?php
if (isset($_POST['submit'])) {
	$password=$_POST['password'];
	$c_password=$_POST['c_password'];

	$errorEmpty = false;
	if (empty($password) || empty($c_password)) {
			echo "<span class='form-error'>Fill all fields!</span>";
			$errorEmpty=true;
	}
	else 
	{
			echo "<span class='form-success'>Fill all fields!</span>";
	}
}
else{
	echo "There was an error";
}
?>


<script>
		$("#password,#c_password").removeClass("input-error");


	var errorEmpty="<?php echo $errorEmpty; ?>";

	if (errorEmpty == true) 
	{
		$("#password,#c_password").addClass("input-error");
	}
	else
	{
			$("#password,#c_password").val("");	
	}
</script>