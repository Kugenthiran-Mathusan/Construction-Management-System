<?php


$con = new mysqli('localhost','root','','payment');

if(!$con){
        die(mysqli_error($con));
    }

?>