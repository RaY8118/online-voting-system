<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'demo';

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
$sql = " SELECT * FROM info ORDER BY id ASC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Candidates Information</title>
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
		}
		#proceedbtn {
                align-items: left;
                appearance: none;
                background-color: green;
                border-radius: 4px;
                border-width: 0;
                box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
                box-sizing: border-box;
                color:white;
                cursor: pointer;
                display: inline-flex;
                font-family: "JetBrains Mono",monospace;
                height: 37px;
                justify-content: center;
                line-height: 1;
                list-style: none;
                overflow: hidden;
                padding-left: 16px;
                padding-right: 16px;
                position: relative;
                text-align: left;
                text-decoration: none;
                transition: box-shadow .15s,transform .15s;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
                white-space: nowrap;
                will-change: box-shadow,transform;
                font-size: 18px;
            }

            #proceedbtn:focus {
                box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
            }

            #proceedbtn:hover {
                box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
                transform: translateY(-2px);
            }

            #proceedbtn:active {
                box-shadow: #D6D6E7 0 3px 7px inset;
                transform: translateY(2px);
            }
			#proceedbtn{
				text-decoration-color: white;
			}
			fieldset{
				background-color:forestgreen;
				padding:0 1rem;
				border-radius: 15px;
				border-width:6px;
				display:inline-block;
				width:95%;
			}
	</style>
</head>

<body>
	<section>
		<center>
	<fieldset>
            <h1 style="font-family:'Times New Roman';color: white;text-shadow: 2px 2px 4px #000000;"><u>Candidates Information</u></h1>  
            </fieldset></center><br><br>
		<!-- TABLE CONSTRUCTION -->
		<table style="width:100%;height:200px;";>
			<tr>
				<th>S.R</th>
				<th>Name</th>
				<th>UID</th>
				<th>INFORMATION</th>
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
				<td><?php echo $rows['id'];?></td>
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['uid'];?></td>
				<td><?php echo $rows['info'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section><br><br>
	<center><a href="../routes/dashboard.php" ><button id="proceedbtn"> <span><u>Proceed</u></span></button></a></center>
	
</body>

</html>
