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
            #winnerbtn {
                appearance: none;
                background-color: #2ea44f;
                border: 1px solid rgba(27, 31, 35, .15);
                border-radius: 6px;
                box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
                box-sizing: border-box;
                color: #fff;
                cursor: pointer;
                display: inline-block;
                font-family: -apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
                font-size: 14px;
                font-weight: 600;
                line-height: 20px;
                padding: 6px 16px;
                position: relative;
                text-align: center;
                text-decoration: none;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
                vertical-align: middle;
                white-space: nowrap;
                position:relative;
                top:75px;
                }

                #winnerbtn:focus:not(:focus-visible):not(.focus-visible) {
                box-shadow: none;
                outline: none;
                }

                #winnerbtn:hover {
                background-color: #2c974b;
                }

                #winnerbtn:focus {
                box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
                outline: none;
                }

                #winnerbtn:disabled {
                background-color: #94d3a2;
                border-color: rgba(27, 31, 35, .1);
                color: rgba(255, 255, 255, .8);
                cursor: default;
                }

                #winnerbtn:active {
                background-color: #298e46;
                box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
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
            </div>
            <center>
            <div>
            <a href="../admin/winner.php"><button id="winnerbtn"> Click here to find the winner</button></a>
            </div>
            </center>
            
            
    </body>
</html>