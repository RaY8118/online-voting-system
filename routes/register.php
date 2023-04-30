<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
          b{
            color:black;
            font-weight: 800;
            font-size: large;
          }
          body{
            background-color:aliceblue;
          }
        </style>
    </head>
    <body>
        <center>
            <div id="headsec" style=" border-radius: 15px 50px;">
            <h1 style="color: black;"><u>Online Voting System</u></h1>  
            </div><br>
            <div id="regsection" style="border-radius:15px;width:auto;height:8.5%;">
                <h2 style="color: black;">Registration</h2>
                </div><br>
                <div id="regform"><form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    <input type="number" name="mob" placeholder="Mobile No" required><br><br>
                    <input type="password" name="pass" placeholder="Password"id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>&nbsp
            <div id="message">
              <h3>Password must contain the following:  </h3>
              <p id="letter" class="invalid">A <b>lowercase </b>letter</p>
              <p id="capital" class="invalid">A <b>Uppercase </b>letter</p>
              <p id="number" class="invalid">A <b>Number </b></p>
              <p id="length" class="invalid">Minimum <b>8 characters </b></p>
              </div>
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 31%" type="character(5)" name="UID" placeholder="UID" title="Enter " required><br><br>
                    <div id="upload" style="width: 30%">
                        <b style="color:black;">Upload image: <input type="file" id="profile" name="image" required></b>
                    </div><br>
                    <div id="upload" style="width: 30%">
                        <b style="color:black;">Select your role:</b>
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Candiates</option>
                            <option value="3">Admin</option>
                        </select><br>                   
                    </div><br><br>
                    <button class="regbtn" type="submit" >Register</button><br><br><br>
                    <b style="color:black;">Already user?</b> <a href="../"><b style="color:darkblue;">Login here</b></a>
                </form>
                </div>
            </center>
    </body>
    <script>
        var myInput = document.getElementById("psw");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");
        
        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
          document.getElementById("message").style.display = "block";
        }
        
        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
          document.getElementById("message").style.display = "none";
        }
        
        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
          // Validate lowercase letters
          var lowerCaseLetters = /[a-z]/g;
          if(myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
          } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }
        
          // Validate capital letters
          var upperCaseLetters = /[A-Z]/g;
          if(myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
          } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
          }
        
          // Validate numbers
          var numbers = /[0-9]/g;
          if(myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
          } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
          }
        
          // Validate length
          if(myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
          } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
          }
        }
        </script>
</html>