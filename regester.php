<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styel.css">
</head>
<body bgcolor="#ffffcc">
<div id="divcss">
<label style="color: red"><h2>REGESTER WITH US</h2></label>
<form method="post" action="" class=".form">
<label style="font-size: 12px">user name</label><br>
<input type="text" name="user" placeholder="enter user name" class="inputv" required=""><br>
<label style="font-size: 12px">enter password</label><br>
<input type="password" name="pass" placeholder="enter password" class="inputv" required="" ><br>
<label style="font-size: 12px">confirm password</label><br>
<input type="password" name="pass2" placeholder="confirm password" class="inputv" required=""><br><br> 
<input type="submit" name="regester" value="REGESTER NOW" id="reg_btn">
	
	<?php
if (isset($_POST['regester']))
{
$user=$_POST['user'];
$pass=$_POST['pass'];
$pass2=$_POST['pass2'];
include("config.php");
if($conn->connect_errno>0)
{
	die("connection failed:".$db);

}
else
{ 
	if ($pass==$pass2) {
		$sql="INSERT INTO tblmegaweb (user,pass,pass2) VALUES ('$user','$pass','$pass2')";
	if($conn->query($sql))
	{
		echo 'REGESTERED SUCCESFULY';
		echo "<script language ='javascript' type='text/javascript'> location.href='home.php'</script>";
	}
	else
	{
		echo 'REGESTRSTION FAILED';
	}
		
	}
	else{
		echo "<script language ='javascript' type='text/javascript'> alert ('password do not march')</script>";
	}
	
}
}
?>
</form>

</div>

<script type="text/javascript">
 		if(window.history.replaceState){window.history.replaceState ( null, null, window.location.href);}
 </script>
</body>
</html>


