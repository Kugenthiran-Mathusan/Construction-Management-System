<?php
$connection =new mysqli("localhost","root","","vacancyregister");

if ($connection->connect_error)
{
//    $connection_status = 'Connection to database failed';
    die('Sorry Unable to Connect to the Database');
}
?>