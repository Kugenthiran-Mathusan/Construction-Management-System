<?php 
    require 'vacconfig.php';

    if(isset($_GET['delete'])){
        $delete = $_GET['delete'];
        $sql = "delete from registeredapplicants where id = $delete";
        $result = $connection->query($sql);

        if($connection->query($sql)){
            echo '<script>location.replace("vaccrudApp.php")</script>';
        }
        else{
            echo "Error:".$connection->error;
        }
    }


     
    
    $connection->close();

?>