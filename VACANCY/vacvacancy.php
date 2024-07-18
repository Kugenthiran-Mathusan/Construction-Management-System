<!DOCTYPE html>
<html lang="en">
<head>
     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Vacancy List</title>
    <link rel="stylesheet" href="vacstyles.css"> 
</head>
<body>

<header>
        <!--<img src="images/company logo.jpg" alt=""> -->
        <a href="#" class="brand">SVM</a>
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


    <div class="container"> 
        <h1>Vacancy List</h1>
        <ul id="vacancy-list"> </ul>
    </div>
    

    <script src="vacscript.js"></script>
    <div class="reg-btn">
    <div class="register-btn-container1">
        <a href="vacregister.php"><button id="register-btn">Register</button></a>
    </div>
    <div class="register-btn-container2">
        <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\Home\index.php"><button id="register-btn">Back to Home</button></a>
    </div>
    </div>
    


    
</body>
</html>
