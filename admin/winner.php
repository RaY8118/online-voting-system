<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'voters_db';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT name from user where role = 2 and votes = ( select max(votes) from user ); ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title> Online Polling-Winner Page</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
			font-size:23px;
			font-family:'Times New Roman';
			color: white;
			text-shadow: 2px 2px 4px #000000;
		}
		th{
			background-color:#34eb7d;
			font-size:34px;
			color:white;
			text-shadow: 2px 2px 4px #000000;
			font-family:'Times New Roman';
		}
		#candsec{
  			width: auto;
  			border: 1px solid #333;
  			box-shadow: 8px 8px 5px #444;
  			padding: 8px 12px;
  			background: linear-gradient(109.6deg, rgb(0, 204, 130) 11.2%, rgb(58, 181, 46) 91.7%);
			border-radius: 15px 50px;
  		}
		body{
			background-color:aliceblue;
		}
	</style>
</head>

<body>
	<section>
		<center>
			<div id="candsec">
			<h1 style="font-family:'Times New Roman';color: white;text-shadow: 2px 2px 4px #000000;">Winner</h1>  
			</div>
        </center><br><br>
		<!-- TABLE CONSTRUCTION -->
		<table style="width:100%;height:200px;";>
			<tr>
				<th>Name</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['name'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section><br><br>
</body>

</html>
