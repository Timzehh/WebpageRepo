<html>
<head>
<style type="text/css"> 
<!-- .tab { margin-left: 40px; }-->
</style>
<title>Get The HECK outa here</title>
</head>
<body>
	<img src="turtle-stripe-socks-teeturtle_800x.jpg" alt="Cute Turtle Socks" style="width:150px;height:150px;">
	<img src="thanks.jpg" alt="Cute Turtle Socks" style="width:300px;height:150px;">
	
	<form action = "phpbuystuff.php" method="POST">
	<b>Name</b><br>

	<label for="FName">First:<abbr title="required"></abbr></label> <input type="text" name="FName"/>
	<label for="LName">Last :<abbr title="required"></abbr></label> <input type="text" name="LName"/>

	<br/><br/>
	<label for="email">Email:<abbr title="required"></abbr></label> <input type="text" name="Email" style="width:300;">
	<label for="pass"> Password:<abbr title="required"></abbr></label><input type="text" name="Password">
	<br/><br/>
	<label for="CCN">Credit Card Number:</label><input type="int" name="CCNum"/>
	<label for="CVS">CVS:</label><input type="int" name="CCCVS"/>
	<label for="CDate">Expiration:</label><input type="int" name="CDate"/><br><br>
	<label for "phn"> Phone Number(optional):</label><br>
	&nbsp;&nbsp;&nbsp;
	<input type="int" name="pn1" style="width:30;">-<input type="int" name="pn2"  style="width:30;">-<input type="int" name="pn3" style="width:40;">
	<br/><br/>
	
	<p><b>Choose the color(s) and size(s) of the pair of sock(s) you would like, a matching pair(s) will be 
	donated to the charity of your choice. Please make checks payable to ESU and write Sock
	Donation in the check memo</b></p>
	<p class="tab"> ESU Colors - Medium - Men (6-8) Women (6-9) Donation $20
	<label for="fstQty"> Qty </label> <input list="quantity" size="4">
									<datalist id="quantity">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">4</option>
									<option value="4">4</option>
									</datalist> 
	<label for="fstChr"> Charity </label><input list="choice" size="8">
										<datalist id="choice" >
										<option value="Walmart">Walmart</option>
										<option value="DWB">DWB</option>
										</datalist></p>
	<p class="tab"> ESU Colors - Large - Men (9-13) Donation $20
	<label for="fstQty"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
						 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
						 &nbsp;&nbsp;&nbsp;&nbsp;
									Qty </label> <input list="quantity" size="4">
									<datalist id="quantity">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">4</option>
									<option value="4">4</option>
									</datalist> 
	<label for="fstChr">  Charity </label><input list="choice" size="8">
										<datalist id="choice">
										<option value="Walmart">Walmart</option>
										<option value="DWB">DWB</option>
										</datalist></p>
	<p class="tab"> Neon Colors - Medium - Men(6-8) Women (6-9) Donation $20
	<label for="fstQty"> Qty </label> <input list="quantity" size="4">
							 		<datalist id="quantity">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">4</option>
									<option value="4">4</option>
									</datalist> 
	<label for="fstChr"> Charity </label><input list="choice" size="8">
										<datalist id="choice">
										<option value="Walmart">Walmart</option>
										<option value="DWB">DWB</option>
										</datalist></p>
	<p class="tab"> Neon Colors - Medium - Men(6-9) Donation $20
	<label for="fstQty"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
						 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
						 &nbsp;&nbsp;
									Qty </label> <input list="quantity" size="4">
									<datalist id="quantity">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">4</option>
									<option value="4">4</option>
									</datalist> 
	<label for="fstChr"> Charity </label><input list="choice" size="8">
										<datalist id="choice">
										<option value="Walmart">Walmart</option>
										<option value="DWB">DWB</option>
										</datalist></p>
										
	<p><b>Pickup or Delivery</b></p>
	<input type="radio" name="pickup" value ="1">I want to pickup my socks. Socks are available for pickup from the C.R.E.A.T.E. Lab 
	(Stroud Hall, Room 107) Tuesdays & Wednesdays 1-4pm<br><br>
	<input type="radio" name="pickup" value ="0">I want my socks delivered. Delivery available on campus only. Delivery day TUesdays 
	between 1-4pm<br><br>
	
	<p>Deliver my Socks to (Optonal)</p>
	<label for="bld"><b>Building Name</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
												 &nbsp;&nbsp;&nbsp;&nbsp;
												 &nbsp;&nbsp;&nbsp;&nbsp;
												 &nbsp;&nbsp;&nbsp;&nbsp;
												 &nbsp;&nbsp;&nbsp;	
	
											 <label for="bld"><b>Room #</b></label><br>
	<input id="bld" type="text" name="bld"></input> &nbsp;&nbsp;&nbsp;&nbsp; <input id="bld" type="text" name="bld"></input>
  <br>-----------------------------------------------------------------------------<br>
	<label for="lgorders"><b>For larger orders</b></label><br>
	<label for="lgor">Please contact the C.R.E.A.T.E. Lab at esucreatelab@gmial.com</label><br><br>
	<input type= "submit" value="Submit"/>
	</form>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "aviano12";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>