<?php

    include 'config.php';

    if(isset($_POST['signUp'])){
        $firstName = $_POST['fName'];
        $lastName = $_POST['lName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        //$password = md5($password);

        $checkEmail = "SELECT * FROM customer WHERE email = '$email'";
        $result = $connection->query($checkEmail);
        if($result->num_rows>0){
            echo "Email Address Already Exist !";
        }
        else{
            $insertQuery = "INSERT INTO customer(firstName,lastName,email,password)
                            VALUES ('$firstName','$lastName','$email','$password') ";
                if($connection->query($insertQuery) == TRUE){
                    header("location: index.php");
                }  
                else{
                    echo "Error: ".$connection->error;
                }          
        }
    }

    if(isset($_POST['signIn']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        //$password = md5($password);

        $sql = "SELECT * from customer WHERE email = '$email' and password = '$password'";
        $result = $connection->query($sql);

        if($result->num_rows>0){
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION['email'] = $row['email'];
            header("Location: index.php");
            exit();
        }
        else{
            echo "Not Found, Incorrect Email or Password";
        }
    }
?>