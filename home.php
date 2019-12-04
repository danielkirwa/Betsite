<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styel.css">
</head>
<body>
<div id="divhome">
<form method="post" action="">
	<label style="color: green"><h3>account name </h3>
	</label>
	<img src="IMG_20180923_183224_2.jpg" class="image" width="15%" height="17%"  style="border-radius: 900px ">
	<label style="float: right;">amount</label>
	<input type="text" name="txtamount" placeholder="0.00" style="float: right;"><br> 
	<details id="details">
		<input type="button" name="my bet" value="bets " class="logoff"><br>&nbsp;
		<input type="button" name="my account" value="account " class="logoff"><br>&nbsp;
		<input type="text" name= "deposit" placeholder="deposit amount">
		<input type="submit" name="btndeposit" value="deposit " class="logoff"><br>&nbsp;
		<input type="text" name= "withdraw" placeholder="withdraw amount">
		<input type="submit" name="btnwithdraw" value="withdraw " class="logoff"><br>&nbsp;
		<input type="submit" name="bonus" value="bonus " class="logoff"><br>&nbsp;
		<input type="submit" name="history" value="history" class="logoff"class="logoff"><br>&nbsp;
		<input type="submit" name="transaction" value="transaction" class="logoff"><br>&nbsp;
		<input type="submit" name="logoff" value="logoff " class="logoff">

	</details><br>
			<?php
if (isset($_POST['btnwithdraw']))
{
$withdraw=$_POST['withdraw'];
include("config.php");
if($conn->connect_errno>0)
{
	die("connection failed:".$db);

}
else
{ 
	
		$sql="UPDATE tblmegaweb (withdraw ) SET ('$withdraw') WHERE uniqid(row='$user') ";
	if($conn->query($sql))
	{
		echo 'TRANSACTION SUCCESFULY';
		echo "<script language = 'javascript' type='text/javascript'>alert('withdraw amount , $withdraw/=') </script>";
		
	}
	else
	{
		echo 'TRANSACTION FAILED';
	}
		
	
	
}
}
if (isset($_POST['btndeposit'])) {
$deposit=$_POST['deposit'];
include("config.php");
if($conn->connect_errno>0)
{
	die("connection failed:".$db);

}
else
{ 
	
		$sql="INSERT INTO tblmegaweb (deposit) VALUES ('$deposit')";
	if($conn->query($sql))
	{
		echo 'TRANSACTION SUCCESFULY';
		echo "<script language ='javascript' type='text/javascript'> alert('deposited amount=, $deposit/=' ) </script>";
	}
	else
	{
		echo 'TRANSACTION FAILED';
	}
		
	
	
}	
}
?>
 <?php 
      if(isset($_POST['logoff']))
      {
            echo "<script language ='javascript' type='text/javascript'> location.href='login.php' </script>";
      }
?>
	</form>
	<div>
	<form method="post" action="">
		<script  > function insert ()</script>
			<input class="textview" name="textview"><br>

		<label>slip</label>
		<input type="text" name="stake" placeholder="stake amount" id="slip" required>
		<input type="checkbox" name=""><label for="place bet">I accept any odd change</label><br>
		<label>win amount</label>
		<input type="text" name="pwin" placeholder="0.00" id="slip">
		<input type="submit" name="place" value="place bet " class="logoff" >

		<?php
if (isset($_POST['place']))
{
$stake=$_POST['stake'];
include("config.php");
if($conn->connect_errno>0)
{
	die("connection failed:".$db);

}
else
{ 
	
		$sql="INSERT INTO tblmegaweb (stake) VALUES ('$stake')";
	if($conn->query($sql))
	{
		echo 'BET SUCCESFULY';
	}
	else
	{
		echo 'BET FAILED';
	}
		
	
	
}
}
?>
		
	</form>
	</div>
	</div>
	<div id="divaction">
		<form action="" method="post"> 
			<label  style="background-color: #ffd0ff"><i>login successfuly  !!!</i></label><br>
			<input type="button" name="home" value="home" class="btnhome">
			<input type="button" name="soccer" value="soccer" class="btnhome">
			<input type="button" name="cassino" value="cassino" class="btnhome">

		    <input type="button" name="invite" value="invite" class="btnhome"><br><br>
			<label>selet date</label>
			<input type="date" name="day" min="0000-01-02" style="border-radius: 4px">
			<!--<a href="highlights.php" style="color:indigo">HIGHLIGTS</a> &nbsp;&nbsp;
			<a href="today.php" style="color:indigo">TOADAY</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
			<label>choose league</label>
			<select class="select">
				<option value="league A"> league A</option>
				<option value="league B"> league B</option>
				<option value="league C"> league C</option>
				<option value="league D"> league D</option>
				<option value="league E"> league E</option>
				<option value="league F"> league F</option>
				<option value="league G"> league G</option>
				<option value="league H"> league H</option>
				<option value="league I"> league I</option>
			</select><br><br>
			<label>search event</label>
			<input type="text" name="choose" placeholder="search event/league /country" class="search">
			<label><h2><i>HOME  PAGE</i></h2></label>


				<table border="1"cellspacing="0" width="100%" style="background-color: springgreen" class="table" method="post">
					

					<tr>
						<td><input type="button" class="button" value="Real 2.34" onclick="insert(Real 2.34)" id="btn_odds"></td>
						<td><input type="button" class="button" value="Draw 2.34" onclick="insert(Real 2.34)" id="btn_odds"></td>
						<td><input type="button" class="button" value="kjgbk 2.34" onclick="insert(Real 2.34)" id="btn_odds"></td>
					</tr>
				</table><br>
				<table border="1"cellspacing="0" width="100%" style="background-color: springgreen" class="table">
					
					<tr>
					
						<td><input type="button" class="button" value="glhl 2.34" onclick="insert(Real 2.34)" id="btn_odds"></td>
						<td><input type="button" class="button" value="Draw 2.34" onclick="insert(Real 2.34)" id="btn_odds"></td>
						<td><input type="button" class="button" value="goujp 2.34" onclick="insert(Real 2.34)" id="btn_odds"></td>
					</tr>
				</table><br>
				<table border="1"cellspacing="0" width="100%" style="background-color: springgreen" class="table">
					
					<tr>
						<td><input type="button" class="button" value="hjfuydut 2.34" onclick="insert(Real 5.34)" id="btn_odds"></td>
						<td><input type="button" class="button" value="Draw 2.34" onclick="insert(Real 3.34)" id="btn_odds"></td>
						<td><input type="button" class="button" value="ouytfg 2.34" onclick="insert(Real 1.74)" id="btn_odds"></td>
					</tr>
				</table><br>
				<table border="1"cellspacing="0" width="100%" style="background-color: springgreen" class="table">
					
					<tr>
						<td><input type="button" class="button" value="HRRTJERHRT 2.34" onclick="insert(Real 1.34)" id="btn_odds"></td>
						<td><input type="button" class="button" value="Draw  2.34" onclick="insert(Real 4.34)" id="btn_odds"></td>
						<td><input type="button" class="button" value="HRTRJTUK 2.34" onclick="insert(Real 7.34)" id="btn_odds"></td>
					</tr>
				</table><br>
				



		</form>
		
	</div>
<style type="text/css">
				.search{
					border-radius: 5px;
					width: 180px

			}
			.select{
				border-color: green;
				cursor: pointer;

			}
			.table{
				
			}
			#slip{
				border-radius: 7px;
				margin: 0 auto;
				width: 100%;
				border-radius: 7px;


			}
			.sliparea{
				border-radius: 7px;
				margin: 0 auto;
				width: 100%;
				border-radius: 7px;
				scroll-behavior: auto;
				height: auto;
				display: block;
				resize: auto;
				max-height: 1000px;
				min-height: 20px;





			}
			</style>

			
</body>
</html>