<?php 
   require 'config.php';

    $id = $_GET['updateid'];
   
    $sql="select * from customer where id = $id";
    $result = $connection->query($sql);

    $row = $result->fetch_assoc();
    $fname = $row['firstName']; 
    $lname = $row['lastName'];
    $email = $row['email'];
    $password = $row['password'];
   
    if(isset($_POST['submit']))
        {
            $fname = $_POST['firstName'];
            $lname = $_POST['lastName'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "update customer set id=$id,firstName='$fname',lastName='$lname',email='$email',password='$password' where id=$id";
            $result = $connection->query($sql);

            if($result){
                    echo '<script>location.replace("crudApp.php")</script>';
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
    <title>Sign-up</title>
    <link rel="stylesheet" href="add.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header>
        <!--<img src="images/company logo.jpg" alt=""> -->
        <a href="#" class="brand">SVM</a>
        <div class="menu-btn">
            <div class="navigation">
                <div class="navigation-items">
                    <a href="#">Home</a>
                    <a href="#">Projects</a>
                    <a href="#">Services</a>
                    <a href="#">About Us</a>
                    <a href="#">Contact</a>
                    <a href="#">Jobs</a>
                    <a href="#">Login</a>
                </div>
            </div>
        </div>
    </header>

    <section class="signup">
        <div class="imgBox">
            <img src="images/signup-img.jpg" alt="">
        </div>
        <div class="contentBox">
            <div class="formBox">
                <h2>Update</h2>
                <form action="" method="post">
                    <div class="inputBox">
                        <span>First Name</span>
                        <input type="text" name="firstName" value=<?php echo $fname; ?>>
                    </div>
                    <div class="inputBox">
                        <span>Last Name</span>
                        <input type="text" name="lastName" value=<?php echo $lname; ?>>
                    </div>
                    <div class="inputBox">
                        <span>Email</span>
                        <input type="email" name="email" value=<?php echo $email; ?>>
                    </div>
                    <div class="inputBox">
                        <span>Password</span>
                        <input type="password" name="password" value=<?php echo $password; ?>>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="submit" value="Update" name="submit">
                    </div>
                    
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="left box">
                <h2>SVM CONSTRUCTION</h2>
                
                <div class="footer-social">
                    <a href=""><i class="fa-solid fa-phone icon"></i>+94 76 8090250</a>
                    <a href=""><i class="fa-solid fa-envelope icon"></i>contructor_Svm@gmail.com</a>
                    <a href=""><i class="fa-brands fa-instagram icon"></i>svm_constructions</a>
                    <a href=""><i class="fa-brands fa-facebook icon"></i>svm_constructions</a>
                    <a href=""><i class="fa-brands fa-youtube icon"></i>svm_constructions</a>
                    <a href=""><i class="fa-solid fa-location-dot icon"></i>location</a>
                </div>
                <img class="footer-logo" src="images/company logo.jpg" alt="">
            </div>

            <div class="center box">
                <h2>All our pages</h2>
                <div class="lings">
                    <a href="">Home</a>
                    <a href="">Projects</a>
                    <a href="">Services</a>
                    <a href="">About us</a>
                    <a href="">Contact</a>
                    <a href="">Jobs</a>
                    <a href="">News</a>
                    <a href="">Log In</a>
                </div>
            </div>

            <div class="right box">
                <h2>Contact us</h2>
                <div class="contact-form">
                    <form action="" method="post">
                        <div class="footer-name">
                            <input type="text" placeholder="Full name" required>
                        </div>
                       
                        <div class="footer-mail">
                            <input type="text" placeholder="Email" required>
                        </div>
                      
                        <div class="footer-msg">
                            <textarea name="" id="" cols="30" rows="5" placeholder="Message"></textarea>
                        </div>
                        
                        <div class="footer-btn">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="box">
                <h2>About SVM</h2>
                <div class="footer-about-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, 
                        similique. Unde, quae itaque ipsam eius sequi rem, nemo dolorem commodi, 
                        assumenda dicta aperiam corrupti repellat dignissimos ratione cum culpa consequatur 
                        nobis repellendus atque repudiandae aliquam ut. Exercitationem consequatur hic ad officia
                         facere? Repudiandae modi assumenda provident iste, ratione ullam quisquam!
                    </p>
                </div>
            </div>
        </div>
    </footer>


</body>
</html>