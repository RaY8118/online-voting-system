<?php
    include("connection.php");

    $name = $_POST['name'];
    $uid = $_POST['uid'];
    $info = $_POST['info'];
    $pic = $_FILES['pic']['name'];
    $tmp_name = $_FILES['pic']['tmp_name'];


    move_uploaded_file($tmp_name,"../uploads/$pic");
    $insert = mysqli_query($connect,"insert into info (name, uid, info, pic) values('$name','$uid' ,'$info', '$pic' )");
    if($insert){
        echo '<script>
                alert("Infomartion Updated Successfully");
                window.location = "../";
            </script>';
    }

?>