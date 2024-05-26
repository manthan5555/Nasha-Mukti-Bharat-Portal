<?php

    include "config.php";

    if(isset($_GET['stud_id']))
    {
        $no= mysqli_query($conn,"select reg_member from tb_add where id='".$_GET['stud_id']."'");
        $i=1;
        $sum=$no+$i;
        $reg = mysqli_query($conn,"update tb_add set reg_member='".$sum."' where id='".$_GET['stud_id']."'");

        if($reg)
        {
            echo "<script>;";
            echo "alert('Registration succesful');";
            echo $sum;
            echo 'window.location.href="index.php";';
            echo "</script>;";
        }

        else
        {
            echo "<script>;";
            echo "alert('Data error......');";
            echo 'window.location.href="index.php";';
            echo "</script>;";
        }
    }

?>
