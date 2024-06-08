<?php
    include 'connect.php';
    if(isset($_GET['deletedid']))
    {
        $sno=$_GET['deletedid'];
        $sql= "delete from `crud` where `S_No`='$sno'";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            header('location:display.php');
        }
        else{
            die(mysqli_error($con));
        }
    }
?>