<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styel.css">
</head>
<body>
<div id="divhome">
	<label style="color: green"><h3>account name</h3></label>
	<label style="float: right;">amount</label>
	<input type="text" name="amount" placeholder="0.00" style="float: right;"><br> 
	<details id="details">
		<input type="button" name="my bet" value="bets " class="logoff"><br>&nbsp;
		<input type="button" name="my account" value="account " class="logoff"><br>&nbsp;
		<input type="button" name="withdraw" value="withdraw " class="logoff"><br>&nbsp;
		<input type="button" name="bonus" value="bonus " class="logoff"><br>&nbsp;
		<input type="button" name="history" value="history" class="logoff"class="logoff"><br>&nbsp;
		<input type="button" name="transaction" value="transaction" class="logoff"><br>&nbsp;
		<input type="button" name="logoff" value="logoff " class="logoff">

	</details>
	</div>
	<div id="divaction">
		<form action="" method="post"> 
			<label >welcome !!!</label><br>
			<input type="button" name="home" value="home" class="btnhome">
			<input type="button" name="soccer" value="soccer" class="btnhome">
			<input type="button" name="cassino" value="cassino" class="btnhome">

			<input type="button" name="invite" value="invite" class="btnhome"><br><br>
			<label>selet date</label>
			<input type="date" name="day" min="0000-01-02" style="border-radius: 4px">
			<a href="home.php">HOME</a> &nbsp;&nbsp;
			<a href="today.php">TOADAY</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
             <label><h2><i>HIGHLIGHTS  GAMES</i></h2></label>
				<table border="1"cellspacing="0" width="100%" style="background-color: springgreen" class="table">
					<tr>
						<th>aaa</th>
						<th>draw</th>
						<th>bbb</th>
					</tr>
					<tr>
						<td> 1 <br>2.34</td>
						<td> x <br>4.55</td>
						<td> 2 <br>3.21</td>
					</tr>
				</table><br>
				<table border="1"cellspacing="0" width="100%" style="background-color: springgreen" class="table">
					<tr>
						<th>aaa</th>
						<th>draw</th>
						<th>bbb</th>
					</tr>
					<tr>
						<td> 1 <br>2.34</td>
						<td> x <br>4.55</td>
						<td> 2 <br>3.21</td>
					</tr>
				</table><br>
				<table border="1"cellspacing="0" width="100%" style="background-color: springgreen" class="table">
					<tr>
						<th>mmmaaa</th>
						<th>draw</th>
						<th>rrbbb</th>
					</tr>
					<tr>
						<td> 1 <br>2.34</td>
						<td> x <br>4.55</td>
						<td> 2 <br>2.21</td>
					</tr>
				</table><br>
				<table border="1"cellspacing="0" width="100%" style="background-color: springgreen" class="table">
					<tr>
						<th>aadsa</th>
						<th>draw</th>
						<th>bbgfb</th>
					</tr>
					<tr>
						<td> 1 <br>1.34</td>
						<td> x <br>4.55</td>
						<td> 2 <br>9.21</td>
					</tr>
				</table><br>
				<table border="1"cellspacing="0" width="100%" style="background-color: springgreen" class="table">
					<tr>
						<th>atr</th>
						<th>draw</th>
						<th>biuy</th>
					</tr>
					<tr>
					<td> 1 <br>8.34</td>
						<td> x <br>4.55</td>
						<td> 2 <br>1.21</td>
						
					</tr>
				</table>

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
				cursor: pointer;
			}
			
			</style>
</body>
</html>