<?php
session_start();
$conn = mysqli_connect("localhost","root","","userDB");
	
$message="";
if(!empty($_POST["login"])) {
	$result = mysqli_query($conn,"SELECT * FROM Users WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
	$row = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION['username'] = $row['username'];
	} else {
	$message = "Invalid Email or Password!";
	}
}
if(!empty($_POST["logout"])) {
	$_SESSION["username"] = "";
	session_destroy();
}
?>
<html>
<title>Login</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="HandheldFriendly" content="true">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<style> 
header {
	width: 100%;
	height: 250px;
	background-color: #006699
}
.field-group { 
	margin:15px 0px; 
}
.input-field {
	padding: 8px;width: 200px;
	border: #A3C3E7 1px solid;
	border-radius:6px; 
}
.member-dashboard {
	padding: 40px;
	background: #D2EDD5;
	color: #555;
	border-radius: 4px;
	display: inline-block;
	text-align:center; 
}
.demo-content label{
	width:auto;
}
@media screen and (max-width:800px) {
	.topnav, header, .content, footer {
		width: 100%;
		padding: ;
	}
}

@media screen and (min-width:551px) and (max-width:620px) {
	.topnav, header, .content, footer {
		width: 100%;
	}
}
@media screen and (min-width:321px) and (max-width:480px) {
	.topnav, header, .content, footer {
		width: 100%;
	}
}
</style>
</head>
<header>
<form action="" method="post" id="frmLogin" style="margin-left:40%;padding-top:0.5%">
	<div class="field-group">
		<div><input name="email" type="text" class="input-field" placeholder="Online Banking Sign in"></div>
	</div>      
</form>
<div style="margin-left:35%;padding-top:0.5%">
<a href=# style="width:0px;color:white;text-align:center;padding:14px 50px;text-decoration:none;font-size:14px;font-family:Verdana"> Register </a> 
<a href=# style="width:0px;color:white;text-align:center;padding:14px 50px;text-decoration:none;font-size:14px;padding-left:5px;padding-top:15px;font-family:Verdana"> Forgot Password </a>
</div>
<div style="padding-top:65px;padding-left:350px">
<a href=# style="width:0px;color:white;text-align:center;padding:14px 50px;text-decoration:none;font-size:14px;font-family:Verdana"> Careers </a>
<a href=# style="width:0px;color:white;text-align:center;padding:14px 50px;text-decoration:none;font-size:14px;font-family:Verdana"> Contact </a> 
<a href=# style="width:0px;color:white;text-align:center;padding:14px 50px;text-decoration:none;font-size:14px;font-family:Verdana"> Locations </a> 
<a href=# style="width:0px;color:white;text-align:center;padding:14px 50px;text-decoration:none;font-size:14px;font-family:Verdana"> ODU CU Members </a>  
</div>
</header>
<body>
<a href=#><p style="text-align:center;padding-top:10px;background-color:#006699;color:white;width:200px;height:60px;margin-left:42%;margin-top:20%;border-radius:20px;font-family:Verdana"> Open Your Langley Account Today <b>>></b> </p> </a>
<p style="color:#996633;font-size:25px;font-family:Verdana;padding-top:50px;padding-left:47%"> Rates </p>
<div>
<a href=#><p style="text-align:center;padding-top:10px;background-color:#CCCCCC;font-size:16px;font-family:Verdana;color:teal;white;width:100px;height:38px;border-radius:22px"> Featured </p> </a>
<a href=#><p style="font-size:17px;font-family:Verdana;color:teal"> Vehicles </p> </a>
<a href=#><p style="font-size:17px;font-family:Verdana;color:teal"> Mortgage </p> </a>
<a href=#><p style="font-size:17px;font-family:Verdana;color:teal"> Home Equity </p> </a>
<a href=#><p style="font-size:17px;font-family:Verdana;color:teal"> Visa </p> </a>
<a href=#><p style="font-size:17px;font-family:Verdana;color:teal"> Certificates </p> </a>
<a href=#><p style="font-size:17px;font-family:Verdana;color:teal"> All rates </p> </a>
</div>
<hr/>
<fieldset style="text-align:center;border:2px solid #CCCCCC;border-radius:10px;margin-left:500px;margin-right:500px;">
<p style="color:#996633;font-size:25px;font-family:Verdana"> 46 Month <br>Certificate </p>
<p style="color:teal;font-size:38px;font-family:Verdana">3.04%</p>
<p style=";padding-top:0px;color:black;font-size:13px;font-family:Verdana"> APY<sup>*</sup><br> </p>
<fieldset style="text-align:center;border:2px solid #996633;border-radius:20px;width:100px;height:20px;margin-left:30%">
<a href=# style="color:#996633;font-size:14px;font-family:Verdana"> LEARN MORE </a>
</fieldset>
</fieldset>

<fieldset style="text-align:center;border:2px solid #CCCCCC;border-radius:10px;margin-left:500px;margin-right:500px;">
<p style="color:#996633;font-size:25px;font-family:Verdana"> Platinum<br>Money Market </p>
<p style="color:teal;font-size:38px;font-family:Verdana">2.02%</p>
<p style="padding-top:0px;color:black;font-size:13px;font-family:Verdana"> APY<sup>*</sup><br> </p>
<p style="color:black;font-size:13px;font-family:Verdana"> (On deposits of $250,000 or more.) </p>
<fieldset style="text-align:center;border:2px solid #996633;border-radius:20px;width:100px;height:20px;margin-left:30%">
<a href=# style="color:#996633;font-size:14px;font-family:Verdana"> LEARN MORE </a>
</fieldset>
</fieldset>

<fieldset style="text-align:center;border:2px solid #CCCCCC;border-radius:10px;margin-left:500px;margin-right:500px;">
<p style="color:#996633;font-size:25px;font-family:Verdana"> 17 Month <br>Certificate </p>
<p style="color:teal;font-size:38px;font-family:Verdana">2.78%</p>
<p style=";padding-top:0px;color:black;font-size:13px;font-family:Verdana"> APY<sup>*</sup><br> </p>
<fieldset style="text-align:center;border:2px solid #996633;border-radius:20px;width:100px;height:20px;margin-left:30%">
<a href=# style="color:#996633;font-size:14px;font-family:Verdana"> LEARN MORE </a>
</fieldset>
</fieldset>

</body>
</html>