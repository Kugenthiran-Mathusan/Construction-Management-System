<?php

include 'payconnect.php';

if(isset($_GET['deleteid']))
{
    $Id=$_GET['deleteid'];


    $sql="delete from payment where Id=$Id";
    $result=mysqli_query($con,$sql);

    if($result)
    {
        //echo "Successfully Deleted";
        header('location:paydisplay.php');
    }

    else{
        die(mysqli_error($con));
    }
}

?>