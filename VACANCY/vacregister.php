<?php 
  
  $connection = new mysqli("localhost", "root", "", "vacancyregister");

  if($connection->connect_error)
      {
          die("Connection failed:" .$connection->connect_error);
      }
   
    if(isset($_POST['Submit']))
        {
            $full_name = $_POST['full_name'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $contactno = $_POST['contactno'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $position = $_POST['position'];
            $cv = $_POST['cv'];
            $note = $_POST['note'];

            $sql = "insert into registeredapplicants(full_name,dob,email,contactno,gender,address,position,cv,note) values('$full_name', '$dob', '$email', '$contactno', '$gender', '$address', '$position', '$cv', '$note')";
            $result = $connection->query($sql);

            if($result){
                    header("location:vaccrudApp.php");
            }
            else{
                echo "Error:".$connection->error;
            }

        }

        $connection->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register here</title>
    <link href="\CONSTRUCTION_MANAGEMENT_SYSTEM\VACANCY\vacregister.css" rel="stylesheet">
</head>
<body>
<div>
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
                    <!--<a href="#">Contact</a>-->
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\VACANCY\vacvacancy.php">Jobs</a>
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\Home\login.php">Login</a>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container">
        <header> Start your career with SVM </header>

        <form action="vacregister.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title"> Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label> Full name</label>
                            <input type="text" placeholder="Enter your name "  name="full_name" required>
                        </div>
                        <div class="input-field">
                            <label> Date of Birth</label>
                            <input type="date" placeholder="Enter birth date " name="dob"required>
                        </div>
                        <div class="input-field">
                            <label> Email</label>
                            <input type="text" placeholder="*******@gmail.com"name="email" required>
                        </div>
                        <div class="input-field">
                            <label> Contact Number</label>
                            <input type="number" placeholder="+947******** " name="contactno" required>
                        </div>
                        <div class="input-field">
                            <label> Gender</label>
                            <input type="text" placeholder="Enter your Gender" name="gender" required>
                        </div>
                        <div class="input-field">
                            <label> Address </label>
                            <input type="text" placeholder="Enter your address " name="address" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details personal">
                <span class="title"> Apply for</span>

                <div class="fields">
                    <div class="input-field">
                        <label> Applied position</label>
                        <input type="text" placeholder="Enter your career " name="position" required>
                    </div>
                    <div class="input-field">
                        <label> Upload your CV </label>
                        <input type="file" name="cv" required>
                    </div>
                    <div class="input-field">
                        <label> Additional note</label>
                        <input type="text" name="note" required>
                    </div> 
                    
                     <div class="image" >
                        <img src="vacimages/vacancyapplicationimage.webp">
                        <div class="content">
                            <input type="checkbox">
                            <label> I Agree the Terms & Conditions</label>
                            <a href="document/terms & condition vishnuja.docx">Terms&condition</a>
                         </div>   
                         <div class="input-field">
                         <a href="http://localhost/vacregister/vacedit.php"><input type="submit" name="Submit"></a>
                         </div>  
                     </div>            
                </div>
            </div>
        </div>
        </form>
    </div>
    
</body>
</html>