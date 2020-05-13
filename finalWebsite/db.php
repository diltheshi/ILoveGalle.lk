





<?php
	
	include("dbconnect.php");
	
	

?>
<DOCTYPE! html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/home.css" >

	<link rel="stylesheet" href="style/db.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="style/home.css" >
	</head>
<body id="about">

	<nav id="navbar">
	
			<ul>
				<li><img src="images/logo1.jpg"></li>
				<li id="actnav"><a>Contact Us</a></li>
				<li><a href="culture.html">Culture</a></li>
				<li><a href="gover.html">Governance</a></li>
				<li><a href="weather.html">Weather</a></li>
				<li><a href="places.html"> Places of Interest</a></li>
				<li><a href="cityOfGalle.html">About</a></li>
				<li><a href="home.html">Home</a></li>
		
			</ul>
		</nav>

<body style="background-color:#34495e">
	<div id="mainWrapper">
	<center><h1>Contact Form</h1></center>
	<center><img src="images/images.png" id="avatar"/></center>
	</style>
	

	


	
	<?PHP 
	if(isset($_REQUEST['note']))
	{	
		$note=$_REQUEST['note'];
		if($note=='success')
		{
			echo"<script>alert('Your form is submitted successfully')</script>";
		}
	}
	?>
	<form action="user_process.php" method="post" name="user">
		<table>
			<tr>
				<td>Name:</td>
				<td><input placeholder ="Name" name="name" type="text"  value=""></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input placeholder="City" type="text" name="city" value=""></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input placeholder="Email" type="text" name="email" value=""></td>
			</tr>
			<tr>
				<td>Message:</td>
				<td><textarea name="message" placeholder="your message here.."></textarea></td>
			</tr>
			 
		</table>
		<div id="submit_btn">
		<center><button name="submit">SUBMIT</button></center>
		 </div>
	</form>
	</body>
	</html>

</body>
</html>