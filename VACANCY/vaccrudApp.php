<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APP</title>
    <link rel="stylesheet" href="vaccrudAppStyle.css">
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
                    <!--<a href="#">Contact</a>-->
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\VACANCY\vacvacancy.php">Jobs</a>
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\Home\login.php">Login</a>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="crudBox">
            <div class="cardHeader">
                <h2>User CRUD Application</h2>
            </div>
            <div class="addBtn">
                <button class="button-Add"><a href="vacregister.php">Add New</a></button>
            </div>
            <div class="cardBody">
                <table class="table">
                    <thead>
                        <tr>
                        <th>Id</th>
                            <th>Full Name</th>
                            <th>Date of Birth</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>position</th>
                            <th>cv</th>
                            <th>note</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            require 'vacconfig.php';
                            $sql = "select * from registeredapplicants";
                            $result = $connection->query($sql);

                            if($result){
                                while($row = $result->fetch_assoc()){
                                    $id = $row ['id'];
                                    $full_name = $row['full_name'];
                                    $dob = $row['dob'];
                                    $email = $row['email'];
                                    $contactno =$row['contactno'];
                                    $gender = $row['gender'];
                                    $address = $row['address'];
                                    $position = $row['position'];
                                    $cv = $row['cv'];
                                    $note = $row['note'];
                                    echo '<tr>
                                    <td> '.$id.' </td>
                                    <td>'.$full_name.'</td>
                                    <td>'.$dob.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$contactno.'</td>
                                    <td>'.$gender.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$position.'</td>
                                    <td>'.$cv.'</td>
                                    <td>'.$note.'</td>
        
                                    <td>
                                        <div class="btn">
                                            <div class="edit-btn">
                                            <button> <a href="vacedit.php? updateid='.$id.'">Update</a></button>
                                            </div>
                                            <div class="delete-btn">
                                            <button> <a href="vacdelete.php?delete='.$id.'">Delete</a></button>
                                            </div>
                                        </div>
                            
                                    </td>
                                </tr>';
                                }
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

