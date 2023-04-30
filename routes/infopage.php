<html>
    <head>
        <title>Online voting system-Information</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <center>
    <div id="headsec" style="border-radius: 15px 50px; "><h1><u>Online Voting System</u></h1></div><br>
        <div id="infotitle">
        <h2>Candidates Information</h2>
    </div><br>
        <div id="infosec">
        <form action="../api/info.php" method="post">
            <br><b>Name: </b>
            <input input="text" name="name" placeholder="Enter name" required><br><br>
            <b>UID: </b>
            <input input="number" name="uid" placeholder="Enter the UID" required><br><br>
            <b>Info: </b>
            <input input="text" name="info" placeholder="Enter about yourself" required><br><br>
              <br><br><br>
            <button class="submitbtn">Submit</button>
        </form>
    </div>
</center>
    </body>
</html>