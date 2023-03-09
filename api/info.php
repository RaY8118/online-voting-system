<?php
    include("connection.php");

    $name = $_POST['name'];
    $uid = $_POST['uid'];
    $info = $_POST['info'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];


    move_uploaded_file($tmp_name,"../uploads/$image");
    $insert = mysqli_query($connect,"insert into info (name, uid, info, photo) values('$name','$uid' ,'$info', '$image' )");
    if($insert){
        echo '<script>
                alert("Infomartion Updated Successfully");
                window.location = "../";
            </script>';
    }

?>