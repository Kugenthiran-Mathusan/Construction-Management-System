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


    $sql = "select *from registration where id='$last_inserted_id'";
    $run = mysqli_query($connection,$sql);

    

    while($row =mysqli_fetch_array($run)){
        $id = $row['id'];
        $Fname = $row['Fname'];
        $Lname = $row['Lname'];
        $email = $row['email'];
        $phone = $row['phone'];
        $nic = $row['nic'];
        $dob = $row['dob'];
        $address = $row['address'];
        $Cname = $row['Cname'];
        $gender = $row['gender'];
        $lang = $row['lang'];
        $pro = $row['pro'];
        $qua = $row['qua'];


    }
?>

<?php

    if(isset($_POST['submit'])){
            $Fname = $_POST['Fname'];
            $Lname = $_POST['Lname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $nic = $_POST['nic'];
            $dob = $_POST['dob'];
            $address = $_POST['address'];
            $Cname = $_POST['Cname'];
            $gender = $_POST['gender'];
            $lang = $_POST['lang'];
            $pro = $_POST['pro'];
            $qua = $_POST['qua'];

            $sql = "UPDATE registration SET Fname='$Fname', Lname='$Lname', email='$email', phone='$phone', nic='$nic', dob='$dob', address='$address', Cname='$Cname', gender='$gender', lang='$lang', pro='$pro', qua='$qua' WHERE id='$last_inserted_id'";
            $result = $connection->query($sql);

        if($result){
                echo '<script>location.replace("regsuccess.php")</script>';
        }
        else{
            echo "Error:".$connection->error;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>REGISTRATION</title>
        <link href="/CONSTRUCTION_MANAGEMENT_SYSTEM\REGISTER\regregister.css" rel="stylesheet">
        
        
        
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
       
<div class="register-main-box">

    <div class="register-photo-container">
        <img src="REGIMG/4d62133c20fe64222eb3d4bfb9c8352f.jpg" height="100%" width="100%">
    </div>


    <div class="register-form-box">
<form class="main-form" action="regedit.php" method="post">
        <div id="form-heading">
            <h1>Registration</h1>
        </div>
        <div class="label-row">
<label for="Fname">First Name:</label>
<label for="Lname">Last Name:</label>
       </div>
        <div class="form-row">
            <input type="text" id="Fname" name="Fname" value="<?php echo $Fname;?>" placeholder="First Name" required>
            <input type="text" id="Lname" name="Lname" value="<?php echo $Lname;?>" placeholder="Last Name" required>
        </div>
        <div class="label-row">
              <label for="email">Email ID:</label>
              <label for="phone">Phone No:</label>
        </div>
        <div class="form-row">
            <input type="email" id="email" name="email" value="<?php echo $email;?>" placeholder="example@gmail.com" required>
            <input type="text" id="phone" name="phone" value="<?php echo $phone;?>" placeholder="+94*********" required>
        </div>
        <div class="label-row">
<label for="nic">NIC Number:</label>
<label for="dob">Date Of Birth:</label>
        </div>
        <div class="form-row">
            
            <input type="text" id="nic" name="nic" value="<?php echo $nic;?>" placeholder="NIC Number" required>
            <input type="date" id="dob" name="dob" value="<?php echo $dob;?>" placeholder="DD/MM/YY" required>
        </div>
        <div class="label-row">
            <label for="address">Address:</label>
            <label for="Cname">Company Name:</label>

        </div>
        <div class="form-row"> 
            <input type="text" id="address" name="address" value = "<?php echo $address;?>" placeholder="No, Street, City, Country." required>
            <input type="text" id="Cname" name="Cname" value="<?php echo $Cname;?>" placeholder="Company Name" required>
           
        </div>
        
        <div class="label-row">
            <label for="gender">Gender:</label>
            <label for="lang">Language:</label>
                   </div>
                 
                    <div class="form-row">
                        <input type="text" id="gender" name="gender" value="<?php echo $gender;?>" placeholder="Male/Female/Other" required>
                        <input type="text" id="lang" name="lang" value="<?php echo $lang;?>" placeholder="Language" required>
                    </div>
                    <div class="label-row">
                          <label for="pro">Project Name:</label>
                          <label for="qua">Qualification Level:</label>
                    </div>
                    <div class="form-row">
                        <input type="text" id="pro" name="pro" value="<?php echo $pro;?>" placeholder="Project Name" required>
                        <input type="text" id="qua" name="qua" value="<?php echo $qua;?>" placeholder="HND/BSC/PG/MSC/PHD" required>
                    </div>
                    
                                
    <div class="edit-button">
    <input id="button2" type="submit" value="Update" name="submit">
    </form>
    <button id="button3"><a href='regdelete.php?del=<?php echo $id?>' >Delete</a></button>
</div>
    </div>
    
</div>
        
<script src="regregister.js"></script>   
    </body>
</html>


