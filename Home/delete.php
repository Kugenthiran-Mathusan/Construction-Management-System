<?php 
    require 'config.php';

    if(isset($_GET['delete'])){
        $delete = $_GET['delete'];
        $sql = "delete  from customer where id = $delete";
        $result = $connection->query($sql);

        if($connection->query($sql)){
            echo '<script>location.replace("crudApp.php")</script>';
        }
        else{
            echo "Error:".$connection->error;
        }
    }


     
    
    $connection->close();

?>