<!DOCTYPE html>
<html>
    <head>
        <title>DELETEED successfully</title>
        <link href="\CONSTRUCTION_MANAGEMENT_SYSTEM\REGISTER\regregister.css" rel="stylesheet">
        
        
    </head>
     <body>

     <header>
        <!--<img src="images/company logo.jpg" alt=""> -->
        <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\Home\index.php" class="brand">SVM</a>
        <div class="menu-btn">
            <div class="navigation">
                <div class="navigation-items">
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\Home\index.php">Home</a>
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\Payment\payproject.php">Projects</a>
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\SERVICES\service.php">Services</a>
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\VACANCY\vacAboutus.php">About Us</a>
                    <!--<a href="#">Contact</a>-->
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\VACANCY\vacvacancy.php">Jobs</a>
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\Home\login.php">Login</a>
                </div>
            </div>
        </div>
    </header>

<?php
     $connection = new mysqli("localhost", "root", "", "mathuregisterdb");

     if($connection->connect_error)
         {
             die("Connection failed:" .$connection->connect_error);
         }

    session_start();

    $last_inserted_id = null;
    
    if(isset($_SESSION['last_inserted_id'])){
        $last_inserted_id = $_SESSION['last_inserted_id'];
    }
   
    $delete=$_GET['del'];

    $sql ="delete from registration where id='$last_inserted_id'";
    $result = $connection->query($sql);

    if($result){
        echo "<div id='delete'>";
        echo "Your details are deleted successfully!";
        echo "</div>";
        
    }
    else{
        echo "Error deleting record: " . $conn->error;
    
    }


    
?>
<div id="delete-btn"> <button  onclick="window.location.href='regregister.php'">Register Again</button>
<button id="back-button" ><a href='\CONSTRUCTION_MANAGEMENT_SYSTEM\Home\index.php' >Bact to home</a></button>
</div>

    </body>
</html>

