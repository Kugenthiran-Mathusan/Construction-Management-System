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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
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

    <div class="main-success">
    <h2 id="success-head">Registration Successful!</h2>
    <p id="success-details">Your registration has been successfully completed.</p>
    
   
    <div id="success-button"> <button id="view-button" onclick="window.location.href='regviewdetails.php'">View Details</Details></button>
 </div>

</div>
</body>
</html>
