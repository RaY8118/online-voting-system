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
            #headerSection{
                align-items: center;
                font-family: cursive;
            }
            #groupSection {
                width: 98%;
                border-radius: 15px;
                border: 1px solid #333;
                box-shadow: 8px 8px 5px #444;
                padding: 8px 12px;
                background-image: linear-gradient(180deg, #fff, #ddd 40%, #ccc);
                font-family: cursive;
            }
            #logout-button {
                align-items: right;
                appearance: none;
                background-color: yellow;
                border-radius: 4px;
                border-width: 0;
                box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
                box-sizing: border-box;
                color: #36395A;
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
                position: absolute;
                top: 35px;
                right: 35px;
            }

            #logout-button:focus {
                box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
            }

            #logout-button:hover {
                box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
                transform: translateY(-2px);
            }

            #logout-button:active {
                box-shadow: #D6D6E7 0 3px 7px inset;
                transform: translateY(2px);
            }
        </style>
        
            <center>
            <div id="headerSection">
            <a href="../routes/logout.php"><button id="logout-button" style="float:bottom-right;">Logout</button></a>
            <h1 id="resultsec" style="border-radius: 15px; font-family:cursive; ">Results</h1>
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
                                <form method="POST" action="../api/vote.php">
                                <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>">
                                <input type="hidden" name = "gid" value="<?php echo $groups[$i]['id'] ?>">
                                <?php
                    }
                    ?>
                </div>
            </div> 
    </body>
</html>