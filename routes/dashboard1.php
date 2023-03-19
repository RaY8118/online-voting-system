<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location:../");
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1 ){
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
        

            <div id="headerSection">
                <a href="../routes/candidatelogin.php"><button id="backbutton">Back</button></a>
                <a href="logout.php"><button id="logoutbutton">logout</button></a>
                <div id="dashSec">
                <center><h1><u>Online Voting System</u></h1></center>
                </div>
            </div>
        
        <hr>
        <div id="mainSection">
            <div id="profilesection">
                <center><img src="../uploads/<?php echo $data['photo']?>" height="120" width="120"></center><br>
                <b>Name: </b><?php echo $data['name']?><br><br>
                <b>Mobile: </b><?php echo $data['mobile']?><br><br>
                <b>UID: </b><?php echo $data['UID']?><br><br>
                <b>Status: </b><?php echo $status?>
            </div>
            <div id="groupsection">
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
                                    <button class="votebttn" disabled type="button"style="background-color:lightgreen;color-black;">Voted</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button class="votebttn"type="submit"style="background-color:red;color:black;">Vote</button>
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
        </div>
    </body>
</html>