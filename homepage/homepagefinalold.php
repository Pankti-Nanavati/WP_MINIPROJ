<?php
session_start();

?>

<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="homepagefinal.css">
</head>
<body>

<br>
<marquee direction="right" bgcolor=#030742><font color="white">INDIA'S LARGEST ONLINE PHARMACY!</marquee>
<br>


<header>
<img id="logo" src="logo.png"></img>
<p class="heading"><font face="Forte" color=#030742>HEALTH HUB</font></p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<img src="health.png" style="height: 220px; width: 350px;">
</header>

<hr></hr>
	<div class="fixed-header">
	        <div class="container">
	            <nav><font color="white" size=5>
	                <a href="#" target="_blank">Home</a>
	                <a href="#" target="_blank">About</a>
	                <a href="../exp7/updatedetails.php" target="_blank">Update Details</a>
	                <a href="../exp7/cartfinal.php" target="_blank">Cart</a>
	                <a href="#" target="_blank">Logout</a>
	            </font></nav>
	        </div>
	</div>
<hr></hr>

<div class="body">
	<br><br>
<div class="container mainbody">
<br>
<?php
    	if (isset($_SESSION['email']))
		{
		$db = mysqli_connect('localhost','root','','user') or
                    die('Error connecting to MySQL server.');
                    $userid=$_SESSION['email'];
                    $row = "SELECT * FROM login_data WHERE email_id= '$userid'";
                    $result = mysqli_query($db,$row);
                    $row1 = mysqli_fetch_array($result);
		echo "<h4>Welcome ".$row1["first_name"]." ".$row1["last_name"]."!</h4>";
		echo "<br>";
		}
?>

<p class="title1"><b><font size="8" face="Calibri">Browse medicines and health care products</font></b></p>
<br>

<p class="subtitle" style="text-align: left;">&emsp;&ensp;<font size="5"><b>Medicines</b></p></font>
<br>
<div class="row">
	<div class="col-sm-3">
		<img id="product" src="benadry.jpg">
		<p class="name name1">Benadryl Cough Syrup</p>
		<p class="price price1">Rs. 75</p>
		<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="../exp7/cart.php?name=Benadryl Cough Syrup" id="links"><font color="white"> Add to Cart</font></a></button><button type="button" class="btn wishlist">
		<i class="fa fa-heart-o" aria-hidden="true"></i></button>
	</div>
	<div class="col-sm-3">
		<img id="product" src="o2.jpg">
		<p class="name name3">O2 Tablet</p>
		<p class="price price3">Rs. 137.25</p>
		<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="../exp7/cart.php?name=O2 Tablet" id="links"><font color="white"> Add to Cart</font></a></button><button type="button" class="btn wishlist">
		<i class="fa fa-heart-o" aria-hidden="true"></i></button>
	</div>
	<div class="col-sm-3">
		<img id="product" src="healthok.jpg">
		<p class="name name4">Health OK Tablet</p>
		<p class="price price4">Rs. 265</p>
		<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="../exp7/cart.php?name=Health OK Tablet" id="links"><font color="white"> Add to Cart</font></a></button><button type="button" class="btn wishlist">
		<i class="fa fa-heart-o" aria-hidden="true"></i></button>
	</div>
	<div class="col-sm-3">
		<img id="product" src="crocin.jpg">
		<p class="name name4">Crocin Advance Tablet</p>
		<p class="price price4">Rs. 14.95</p>
		<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="../exp7/cart.php?name=Crocin Advance Tablet" id="links"><font color="white"> Add to Cart</font></a></button><button type="button" class="btn wishlist">
		<i class="fa fa-heart-o" aria-hidden="true"></i></button>
	</div>
</div><br><br>

<p class="subtitle" style="text-align: left;">&emsp;&ensp;<font size="5"><b>Baby Care Products</b></p></font>
<br>
<div class="row">
	<div class="col-sm-3">
		<img id="product" src="babyoil.jpg">
		<p class="name name5">Baby Massage Oil</p>
		<p class="price price5">Rs. 265</p>
		<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="../exp7/cart.php?name=Baby Massage Oil" id="links"><font color="white"> Add to Cart</font></a></button><button type="button" class="btn wishlist">
		<i class="fa fa-heart-o" aria-hidden="true"></i></button>
	</div>
	<div class="col-sm-3">
		<img id="product" src="drypants.jpg">
		<p class="name name6">Baby Dry Pants</p>
		<p class="price price6">Rs. 738</p>
		<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="../exp7/cart.php?name=Baby Dry Pants" id="links"><font color="white"> Add to Cart</font></a></button><button type="button" class="btn wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
	</div>
	<div class="col-sm-3">
		<img id="product" src="bodywash.jpg">
		<p class="name name7">Baby Hair & Body Wash</p>
		<p class="price price7">Rs. 329</p>
		<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="../exp7/cart.php?name=Baby Hair & Body Wash" id="links"><font color="white"> Add to Cart</font></a></button><button type="button" class="btn wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
	</div>
	<div class="col-sm-3">
		<img id="product" src="babycream.jpg">
		<p class="name name8">Baby Cream</p>
		<p class="price price8">Rs. 299</p>
		<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="../exp7/cart.php?name=Baby Cream" id="links"><font color="white"> Add to Cart</font></a></button><button type="button" class="btn wishlist">
		<i class="fa fa-heart-o" aria-hidden="true"></i></button>
	</div>
</div><br><br>

<p class="subtitle" style="text-align: left;">&emsp;&ensp;<font size="5"><b>Skin Care Products</b></font></p>
<br>
<div class="row">
	<div class="col-sm-3">
		<img id="product" src="facewash.jpg">
		<p class="name name9">Face Wash</p>
		<p class="price price9">Rs. 199</p>
		<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="../exp7/cart.php?name=Face Wash" id="links"><font color="white"> Add to Cart</font></a></button><button type="button" class="btn wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
	</div>
	<div class="col-sm-3">
		<img id="product" src="sunscreen.jpg">
		<p class="name name10">Sunscreen</p>
		<p class="price price10">Rs. 221</p>
		<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="../exp7/cart.php?name=Sunscreen" id="links"><font color="white"> Add to Cart</font></a></button><button type="button" class="btn wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
	</div>
	<div class="col-sm-3">
		<img id="product" src="soap.jpg">
		<p class="name name11">Herbal Soap</p>
		<p class="price price11">Rs. 128</p>
		<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="../exp7/cart.php?name=Herbal Soap" id="links"><font color="white"> Add to Cart</font></a></button><button type="button" class="btn wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
	</div>
	<div class="col-sm-3">
		<img id="product" src="moist.jpg">
		<p class="name name12">Moisturizer</p>
		<p class="price price12">Rs. 160</p>
		<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="../exp7/cart.php?name=Moisturizer" id="links"><font color="white"> Add to Cart</font></a></button><button type="button" class="btn wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
	</div>
</div><br><br><br>
</div>
<br><br>
</div>
<br><br><br>
<footer>
    <div class="column">
        <p>&ensp;&ensp;Company</p>
           <ul style="list-style-type:disc">
                    <li>About Us</li>
                    <li>Careers</li>
                    <li>Privacy Policy</li>
                    <li>Contact Us</li>
           </ul>
    </div>
    <div class="column">
        <p>&ensp;&ensp;Our Services</p>
           <ul>
                    <li>Medicines</li>
                    <li>Healthcare Products</li>
                    <li>Skin Care Products</li>
                    <li>Baby Care Products</li>
                    <li>Home Delivery</li>
           </ul>
    </div>
    <div class="column">
        <p>&ensp;&ensp;Social</p>
           <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>YouTube</li>
					<li>LinkedIn</li>
           </ul>
      </div>
</footer>

</body>
</html>
