<html>
    <head>
        <title>Information</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="infotitle">
        <h2><p>Candidates Information</p></h2>
    </div>
        
        <div id="infosec">
        <form action="../api/info.php" method="post">
            <b>Name: </b>
            <input input="text" name="name" placeholder="Enter name" required><br><br>
            <b>UID: </b>
            <input input="number" name="uid" placeholder="Enter the Unique Identification code" required><br><br>
            <b>Info: </b>
            <input input="text" name="info" placeholder="Enter about yourself" required><br><br>
                <b>Upload image: <input type="file" id="profile" name="imag" required></b>
              <br>
            <button class="submitbtn">Submit</button>
        </form>
    </div>

    </body>
</html>