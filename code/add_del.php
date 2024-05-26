<?php

    include "config.php";

    if(isset($_GET['stud_id']))
    {
        $delete = mysqli_query($conn,"delete from tb_add where id='".$_GET['stud_id']."'");

        if($delete)
        {
            echo "<script>;";
            echo "alert('Record deleted');";
            echo 'window.location.href="contactview.php";';
            echo "</script>;";
        }

        else
        {
            echo "<script>;";
            echo "alert('Data error......');";
            echo 'window.location.href="contactview.php";';
            echo "</script>;";
        }
    }

?>
