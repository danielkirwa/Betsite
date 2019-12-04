<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styel.css">
</head>
<body bgcolor="seashell">

<div id="divcss">
<center><h2>log in page</h2>	
<img src="IMG_20180923_183224_2.jpg" class="image" width="27%" height="30%"  style="border-radius: 900px"></center>
<form method="post" action="" class=".form">
	<label>user name</label><br>
	<input type="text" name="user" placeholder="enter name" class="inputv"><br>
		<label>passwod</label><br>
	<input type="password" name="pass" placeholder="enter password" class="inputv"><br>
	<input type="submit" value="log in" id="log_btn" name="login" ><br>
	<input type="submit" name="regester" value="REGESTER NOW" id="reg_btn" >

<?php 
	if(isset($_POST['login']))
	{
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		include("config.php");

		if($conn->connect_error > 0)
		{
			die("Connection Failed: ".$db);
		}
		else
		{
			$sql = "SELECT user, pass FROM tblmegaweb WHERE user = '$user' and pass = '$pass'";
			if(!$result = $conn->query($sql)){
				die("Connection Failed: ".$db);}
			while($row = $result -> fetch_assoc())
				{
					echo "<script language ='javascript' type='text/javascript'> location.href='home.php' </script>";
					echo 'welcome : $user';
				}
				{
					echo "<script language ='javascript' type='text/javascript'> alert('Invalid Username Or Password , $user' ) </script>";
				}
		}
		}				
 ?>
  <?php 
      if(isset($_POST['regester']))
      {
            echo "<script language ='javascript' type='text/javascript'> location.href='regester.php' </script>";
      }
?>
</form>


</div>


</body>
</html>
