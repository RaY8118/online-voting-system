<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Online voting system-Home
        </title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <center>
        <div id="headsec"><h1>Online Voting System</h1></div>
        <hr><br>
        <div id="loginsec">
        <h2>Login</h2>
    </div><br>
        <div class="container">
          <div class="namesec">
        <form action="api/login.php" method="post">
            <b>Name:</b>
            <input input="text" name="usrname" placeholder="Enter Name" required><br>
            <b>Mobile no:</b>
            <input input="number"name="mob" placeholder="Enter mobile" required><br>
            <b>Password:</b>
            <input input="password" type="password" id="psw" name="pass" placeholder="Enter password" required><br>
            <h3><b>Choose ur role: </b></h3><br>
            <div class="select" style="width:300px;">
            <select name="role">
                <option value="1">Voter</option>
                <option value="2">Candiate</option>
                <option value="3">Admin</option>
            </select><br><br>
          </div><br><br>
            <button class="submitbtn" role="button">Submit</button> 
            <b style="color:black;text-shadow: 2px 2px 4px #000000;">New user?</b> <a href="routes/register.php"><b style="color:darkblue;text-shadow: 2px 2px 4px #000000;">Register here</b></a>
        </form>
      </div>
    </center>
</div>
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