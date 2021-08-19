<?php
include("Account.php");
$account = new Account();

if(isset($_POST['submit'])){
	$u_name=$_POST["name1"];
	$password1 = $_POST["password1"];
	$password2 = $_POST["c_password1"];
 	$email=$_POST["email1"];
	$number = $_POST["number1"];

	$con = mysqli_connect("localhost","root","","beauty");

	$account->register($u_name,$email,$number,$password1,$password2);


}




// include("reg.php");
?>
<html>
<head>
	<style >
		table{
			margin-left: 64%;
			margin-top: 6%;
		}
		#t1{
			font-size: 30px;
		}
		#t2{

			opacity: 0.6;
			font-size: 17px;
		}
		#p1{
				margin-left: 8px;
				height: 20px;
				margin-top: 0px;
				margin-bottom: -20px;
			}
		#p2{
				margin-left: 8px;
				height: 10px;
				margin-top: 0px;
				margin-bottom: -20px;
			}
			#p3{
				margin-left: 8px;
				height: 3px;
				margin-top: 0px;
				margin-bottom: -20px;
			}
		
		#name{
			border-radius: 8px;
			margin: 6% 6% 1% 1%;
			height: 35px;
			font-size: 16px;
			width: 95%;
		}
        /* .errorMessage{
           float:right;
        } */
		#email{
			border-radius: 8px;
			font-size: 16px;
			width: 95%;
			margin: 2% 1% 1% 1%;
			height: 35px;
		}
		#number{
			border-radius: 8px;
			font-size: 16px;
			width: 95%;
			margin: 2% 1% 1% 1%;
			height: 35px;
		}
		#password{
			border-radius: 8px;
			font-size: 16px;
			width: 95%;
			margin: 2% 1% 1% 1%;
			height: 35px;
		}
		#c_password{
			border-radius: 8px;
			font-size: 16px;
			width: 95%;
			margin: 2% 1% 1% 1%;
			height: 35px;
		}
		#b1{
			font-size: 18px;
			margin: 2%;
			margin-left: 7px;
			padding-bottom: 6.5%;
			padding-top: 3%;
			background-color: green;
			color: white;
			width: 94%;
			height: 05px;
			border-radius: 10px;
		}

		#error
		{
			color: red;
		}	

		body{
		 background-image: url(images/regs4.jpg);
		 opacity: 0.7;
		 background-size: cover;
		}
	</style>
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
<body>
	<form action="" method="post">
<table  align="center"  >

	<tr><td colspan="2" id="t1" style="color: white">--------------Sign Up---------------</td></tr>
	<tr><td colspan="2" align="center" id="t2" style="color: white">Register yourself it's free and only takes a minute <br><br></td></tr>
	<tr>
        <td><input type="text" placeholder="Name" id="name" name="name1" required> </td><br>
    </tr>
    <tr>
        <td id="error"><?php echo $account->getError("username must be between 5 and 25 characters"); ?> </td>
	</tr>
	<tr>
		<td colspan="2" ><input type="email" placeholder="Email" id="email" name="email1" required ></td>
	</tr>
	<tr>
        <td id="error"><?php echo $account->getError("Email already use"); ?> </td>
	</tr>
	<p id="p1" style="color: white;"></p><br>

    <tr><td colspan="2"><input type="text" maxlength="10" placeholder="Number" id="number" onkeypress="return onlyNumberKey(event)" name="number1" required></td></tr>
  
    
    <tr><td colspan="2"><input type="Password" placeholder="Password" id="password" name="password1" requireds></td></tr>
   <tr> <td id="error"><?php echo $account->getError("Password should hava only characters and numbers"); ?></td><tr>
   <tr> <td id="error"><?php echo $account->getError("Password should be between 5 and 30 characters"); ?></td><tr>
	<tr><td colspan="2"><input type="Password" placeholder="Confirm Password" id="c_password" name="c_password1" required></td></tr>
	<td id="error"><?php echo $account->getError("Password doesn't match"); ?></td>
	<tr><td colspan="2" ><br><input type="checkbox" id="c1"><font color="white" size="04px">I aggree the </font> <font color="#75E506" size="04px">Terms of Use </font><font color="white" size="04px"> & </font><font color="#75E506" size="04px">Privacy</font></td></tr>

	<tr><td colspan="2"><br><input type="submit" value="Sign Up" id="b1" disabled="true" name="submit"><br></td></tr>
	<tr><td><br></td></tr>
	<script type="text/javascript">
		var checker = document.getElementById('c1');
		var sendbtn = document.getElementById('b1');
		checker.onchange = function() {
  		sendbtn.disabled = !this.checked;};
	</script>
</table>
</form>
</body>
</html>
