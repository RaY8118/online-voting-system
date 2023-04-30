<?php
    include("connection.php");

    $name = $_POST['name'];
    $uid = $_POST['uid'];
    $info = $_POST['info'];


    $insert = mysqli_query($connect,"insert into info (name, uid, info) values('$name','$uid' ,'$info' )");
    if($insert){
        echo '<script>
                alert("Infomartion Updated Successfully");
                window.location = "../";
            </script>';
    }

?>