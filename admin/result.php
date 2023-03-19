<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];
?>
<html>
    <head>
        <title>Online voting system - Results</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        <style>
            body{
                background-color: aliceblue;
            }
            #groupSection {
                width: 98%;
                border-radius: 15px;
                border: 1px solid #333;
                box-shadow: 8px 8px 5px #444;
                padding: 8px 12px;
                background-image: linear-gradient(180deg, #fff, #ddd 40%, #ccc);
            }
        </style>
      <center>
            <div id="headerSection">
            <div id="resultsec"><h1><u>Online Voting System</u></h1> </div>
        </div>
            </center>
                <hr>
                <div id="groupSection">
                    <?php

                    if(isset($_SESSION['groups']))
                        $groups = $_SESSION['groups'];
                        for($i=0; $i<count($groups); $i++){
                            ?>
                                <div >
                                <img style="float: right" src="../uploads/<?php echo $groups[$i]['photo']?>" height="80" width="80">
                                <b>Candidates Name : </b><?php echo $groups[$i]['name']?><br><br>
                                <b>Votes :</b> <?php echo $groups[$i]['votes']?><br><br><br>
                                <?php
                    }
                    ?>
                </div>
                <a href="../admin/winner.php"><button id="winnerbtn" style="align-items:left;"> Click here to find the winner</button></a>
            </div> 
    </body>
</html>