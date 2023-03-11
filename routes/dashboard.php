<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>

<html>
    <head>
        <title>Online voting system - Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        <style>
            body{
                background-color:aliceblue;
            }
            #profileSection {
                width: 30%;
                float: left;
                padding: 20px;
                font-family: Cursive;
            }
            #dashsec{
                width: auto;
                border: 1px solid #333;
                box-shadow: 8px 8px 5px #444;
                border-radius: 15px 50px;
                padding: 8px 12px;
                background-color: yellow;
                font-family: Cursive;
            }
            #groupSection {
                width: 60%;
                float: right;
                padding: 25px;
                border-radius: 20px;
                font-family: Cursive;
            }
            #profileSection {
                width: 30%;
                border: 1px solid #333;
                box-shadow: 8px 8px 5px #444;
                border-radius: 15px;
                padding: 8px 12px;
                background-image: linear-gradient(180deg, #fff, #ddd 40%, #ccc);
            }

            #groupSection {
                width:65%;
                border: 1px solid #333;
                box-shadow: 8px 8px 5px #444;
                border-radius: 15px;
                padding: 8px 12px;
                background-image: linear-gradient(180deg, #fff, #ddd 40%, #ccc);
            }
            #back-button {
                float: left;
                margin-left: 20px;
                margin-top: 20px;
                padding: 5px;
                font-size: 15px;
                background-color: #ffe600;
                color: rgb(0, 0, 0);
                border-radius: 7px;
                width:7%;
                height:4%;
                transition: width 1.5s height 1.5s;

            }

            #logout-button {
                float: right;
                margin-right: 20px;
                margin-top: 20px;
                padding: 5px;
                font-size: 15px;
                background-color: #ffe600;
                color: rgb(0, 0, 0);
                border-radius: 7px;
                width:7%;
                height:4%;
            }
            #headerSection{
                font-family: sans-serif;
            }
            .votebtn {
                align-items: center;
                appearance: none;
                background-color: #FCFCFD;
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
            }

            .votebtn:focus {
                box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
            }

            .votebtn:hover {
                box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
                transform: translateY(-2px);
            }

            .votebtn:active {
                box-shadow: #D6D6E7 0 3px 7px inset;
                transform: translateY(2px);
            }
            #back-button {
                align-items: left;
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
                font-family: cursive;
            }

            #back-button:focus {
                box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
            }

            #back-button:hover {
                box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
                transform: translateY(-2px);
            }

            #back-button:active {
                box-shadow: #D6D6E7 0 3px 7px inset;
                transform: translateY(2px);
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
                font-family: Cursive;
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
            <a href="../routes/candidatelogin.php"><button id="back-button"> Back</button></a>
            <a href="logout.php"><button id="logout-button">Logout</button></a>
            <div id="dashsec"><h1><u>Online Voting System</u></h1> </div>
             
        </div>
            </center>
            <hr>

            <div id="mainSection">
                <div id="profileSection">
                    <center><img src="../uploads/<?php echo $data['photo']?>" height="120" width="120"></center><br>
                    <b>Name : </b><?php echo $data['name'] ?><br><br>
                    <b>Mobile : </b><?php echo $data['mobile'] ?><br><br>
                    <b>UID : </b><?php echo $data['UID'] ?><br><br>
                    <b>Status : </b><?php echo $status ?>
                </div>
                <div id="groupSection">
                    <?php

                    if(isset($_SESSION['groups'])){
                        $groups = $_SESSION['groups'];
                        for($i=0; $i<count($groups); $i++){
                            ?>
                                <div style="border-bottom: 5px solid #0e1525; margin-bottom: 10px">
                                <img style="float: right" src="../uploads/<?php echo $groups[$i]['photo']?>" height="75" width="75">
                                <b>Candidates Name : </b><?php echo $groups[$i]['name']?><br><br>
                                <form method="POST" action="../api/vote.php">
                                <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>">
                                <input type="hidden" name = "gid" value="<?php echo $groups[$i]['id'] ?>">
                                <?php

                                if($_SESSION['status']==1){
                                    ?>
                                    <button class="votebtn" disabled type="button"style="background-color:lightgreen;color-black;">Voted</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button class="votebtn"type="submit"style="background-color:red;color:black;">Vote</button>
                                    <?php
                                }
                                ?>
                                </form>
                                </div>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <b>No Candidates available right now.</b>    
                            </div>
                        <?php
                    }  
                    ?>
                </div>
            </div> 
    </body>
</html>