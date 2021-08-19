<!DOCTYPE html>
<html>
<head>
	<style >
		
		.d2{
			background: black;
			height: 250px;
			width: 101.5%;
			margin-left: -1%;
		} 

		#t1{
			margin-left: 37%;
			height: 25px;
			padding: 0px;
			width: 15%;
		}
		#b1{
			height: 25px;
			padding : 0px;
			background-color: orange;
			margin-left: 0.5%;

		}
	</style>

	<script>
		function anima()
		{
			var ab= new XMLHttpRequest();
			var data=document.getElementById('t1').value;
			ab.open('POST','ab.php',true);
			ab.onload = function(){
				document.getElementById('about').innerHTML = ab.responseText;
			}
			ab.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			var dt = "nm="+data;
			ab.send(dt);
		}

			


	</script>
	<title></title>
</head>
<body>
<p style="color: orange; margin-left: 45%; font-size: 50px; margin-bottom: 20px; margin-top: 20px;" >About Us</p>
<div class="d1">
	<img src="images/about.JPG" style="width: 101.5% ; margin-left: -1%;">
	<p style="font-size: 20px;">In just a few years, Personal Care and Beauty industry has given rise to multiple brands and products in various categories like Skin Care, Face Care, Hair Care, Make up and for various concerns like Dry Skin, Oily Skin, Sensitive Skin, Frizzy Hair, Curly Hair and so much more. These products have opened up a whole new door into the world of beauty, but have also setup an extreme pressure on wallets to meet those international beauty standards and follow the latest trends, which barely last for a few weeks at the most.</p> <br>

<p style="font-size: 20px;">The trade-off between quality and price has been in discussion for just as long. But we, at OrangeSomething.com, decided that beauty shouldn’t come with a trade-off. On 5th July 2019, we started our journey towards collating quality personal care and beauty products which come at an affordable price. We manage to not fall off the crazy fast trends train, while not compromising on quality, by sourcing directly from authorized manufacturers and brands. We aim to ensure that all products on the website are 100% genuine and cruelty-free products. The team of OrangeSomething.com tests all the products personally and then signs them off as fit for you. We ship across India to almost all pin codes, from Kashmir in the North to Tamil Nadu in the South, from Assam in the East to Gujarat in the West, using a reliable delivery mechanism to guarantee timely delivery of our products.</p><br>

<p style="font-size: 20px;">OrangeSomething.com is all about celebrating the special beauty of every individual and helping them to achieve the avatar and persona they wish to create for themselves, without having to burn a hole through their pocket. From current-trend to timeless style, we aspire to become your one-stop personal care and beauty store that doesn’t let quality slide in search for affordable prices.

</p>
</div>
<div class="d2" >
	<p style="margin-left: 35%; color: white; font-size: 30px; padding-top: 40px;">Subscribe to our newsletter</p>
<p style="margin-left: 29%; color: white; font-size: 20px;margin-top: -25px;">Get all the discounts and new offers directly to your email.</p>



<form action="" method="POST">
<input type="email" placeholder="Your email" id="t1" name="t1" required>
<button id="b1" type="button" onclick="anima()">Submit</button>
<div id="about" style="margin-left: 35% ; margin-top: 1%; color: white"></div>
</form>




<p style="color: white; font-size: 20px; margin-left: 37.5%">100% free, Unsubscribe any time!</p>
</div>
</body>
</html>