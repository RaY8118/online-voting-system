<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Online voting system-Home
        </title>
        <link rel="stylesheet" href="css/stylesheet.css">
        <style>
          b{
            color:black;
            font-weight: 700;
            font-size: large;
          }
          body{
            background-color: aliceblue;
          }
        </style>
    </head>
    <body>
        <center>
        <div id="headsec" style="border-radius: 15px 50px;font-family: cursive;"><h1><u>Online Voting System</u></h1></div><br>
        <div id="loginsec" style="border-radius: 15px; font-family:cursive; ">
        <h2>Login</h2>
    </div><br>
          <div class="container">
        <form action="api/login.php" method="post">
            <b>Name:</b>
            <input input="text" name="usrname" placeholder="Enter Name" required><br>
            <b>Mobile no:</b>
            <input input="number"name="mob" placeholder="Enter mobile" required><br>
            <b>Password:</b>
            <input input="password" type="password" id="psw" name="pass" placeholder="Enter password" required><br>
            <h3><b>Choose ur role: </b></h3><br>
            <div class="select" style="width:250px;height:50px;">
            <select name="role">
                <option value="1">Voter</option>
                <option value="2">Candiate</option>
                <option value="3">Admin</option>
            </select><br><br>
          </div><br><br><br>
            <button class="submitbtn" role="button">Submit</button><br><br><br>
            <b style="color:black;">New user?</b> <a href="routes/register.php"><b style="color:darkblue;">Register here</b></a>
        </form>
      </div>
    </center>
<script>
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");
    
    myInput.onfocus = function() {
      document.getElementById("message").style.display = "block";
    }
    
    myInput.onblur = function() {
      document.getElementById("message").style.display = "none";
    }
    
    myInput.onkeyup = function() {

      var lowerCaseLetters = /[a-z]/g;
      if(myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
    }
      var upperCaseLetters = /[A-Z]/g;
      if(myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
      }
      var numbers = /[0-9]/g;
      if(myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
      }
      if(myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
      }
    }
    function myFunction() {
      var x = document.getElementById("psw");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    
    
    </script>
    </body>
</html>