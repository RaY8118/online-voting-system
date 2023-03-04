<?php
    include("connection.php");

    $Name = $_POST['name'];
    $uid = $_POST['uid'];
    $info = $_POST['info'];
    $imag = $_FILES['imag']['name'];
    $tmpname = $_FILES['imag']['tmpname'];


    move_uploaded_file($tmpname,"../uploads/$imag");
    $insert = mysqli_query($connect,"insert into info (name, uid, info, pic) values('$Name','$uid' ,'$info', '$imag' )");
    if($insert){
        echo '<script>
                alert("Infomartion Updated Successfully");
                window.location = "../";
            </script>';
    }

?>