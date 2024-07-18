<?php

$connection = new mysqli("localhost", "root", "", "mathuregisterdb");
session_start();
if ($connection->connect_error) {
    die("Connection failed:" . $connection->connect_error);
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    $check_query = "SELECT * FROM registration WHERE email = '$email'";
    $check_result = mysqli_query($connection, $check_query);
    if (mysqli_num_rows($check_result) > 0) {
        echo "<script>alert('Email already registered. Please use a different email.');</script>";
    } else {
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $phone = $_POST['phone'];
        $nic = $_POST['nic'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $Cname = $_POST['Cname'];
        $gender = $_POST['gender'];
        $lang = $_POST['lang'];
        $pro = $_POST['pro'];
        $qua = $_POST['qua'];

        $sql = "INSERT INTO registration (Fname, Lname, email, phone, nic, dob, address, Cname, gender, lang, pro, qua) VALUES ('$Fname', '$Lname', '$email', '$phone', '$nic', '$dob', '$address', '$Cname', '$gender', '$lang', '$pro', '$qua')";

        if (mysqli_query($connection, $sql)) {
            $last_id = mysqli_insert_id($connection);
            $_SESSION['last_inserted_id'] = $last_id;
            header("Location: Mathusuccess.php");
        } else {
            echo "Something went wrong" . $connection->error;
        }
    }
}

$connection->close();

?>





<!DOCTYPE html>
<html>
    <head>
        <title>REGISTRATION</title>
        <link href="regregister.css" rel="stylesheet">
        <link href="regheader.css" rel="stylesheet">
        
    </head>
    

    <body>

    <header>
        <!--<img src="images/company logo.jpg" alt=""> -->
        <a href="#" class="brand">SVM</a>
        <div class="menu-btn">
            <div class="navigation">
                <div class="navigation-items">
                    <a href="\Home\index.php">Home</a>
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\Payment\payproject.php">Projects</a>
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\SERVICES\service.php">Services</a>
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\VACANCY\vacAboutus.php">About Us</a>
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\VACANCY\vacvacancy.php">Jobs</a>
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\Home\login.php">Login</a>
                </div>
            </div>
        </div>
    </header>

       
<div class="register-main-box">

    <div class="register-photo-container">
        <img src="REGIMG/4d62133c20fe64222eb3d4bfb9c8352f.jpg" height="100%" width="100%">
    </div>


    <div class="register-form-box">
<form id="main-form" class="main-form" action="regregister.php" method="post" onsubmit="return validateForm()" >
        <div id="form-heading">
            <h1>Registration</h1>
        </div>
        <div class="label-row">
<label for="Fname">First Name:</label>
<label for="Lname">Last Name:</label>
       </div>
        <div class="form-row">
            <input type="text" id="Fname" name="Fname" placeholder="First Name" required>
            <input type="text" id="Lname" name="Lname" placeholder="Last Name" required>
        </div>
        <div class="label-row">
              <label for="email">Email ID:</label>
              <label for="phone">Phone No:</label>
        </div>
        <div class="form-row">
            <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
            <input type="text" id="phone" name="phone" placeholder="+94*********" required>
        </div>
        <div class="label-row">
<label for="nic">NIC Number:</label>
<label for="dob">Date Of Birth:</label>
        </div>
        <div class="form-row">
            
            <input type="text" id="nic" name="nic" placeholder="NIC Number" required>
            <input type="date" id="dob" name="dob" placeholder="DD/MM/YY" required>
        </div>
        <div class="label-row">
            <label for="address">Address:</label>
            <label for="Cname">Company Name:</label>

        </div>
        <div class="form-row"> 
            <input type="text" id="address" name="address" placeholder="No, Street, City, Country." required>
            <input type="text" id="Cname" name="Cname" placeholder="Company Name" required>
           
        </div>
        
        <div class="label-row">
            <label for="gender">Gender:</label>
            <label for="lang">Language:</label>
                   </div>
                 
                    <div class="form-row">
                        <input type="text" id="gender" name="gender" placeholder="Male/Female/Other" required>
                        <input type="text" id="lang" name="lang" placeholder="Language" required>
                    </div>
                    <div class="label-row">
                          <label for="pro">Project Name:</label>
                          <label for="qua">Qualification Level:</label>
                    </div>
                    <div class="form-row">
                        <input type="text" id="pro" name="pro" placeholder="Project Name" required>
                        <input type="text" id="qua" name="qua" placeholder="HND/BSC/PG/MSC/PHD" required>
                    </div>
                    
                                
                
                    <button id="button1" type="submit"name="submit">Register</button>    
                    
 </form>
    </div>
    
</div>
        
<script src="regregister.js"></script>   
    </body>

</html>