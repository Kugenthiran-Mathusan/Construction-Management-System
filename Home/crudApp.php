<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APP</title>
    <link rel="stylesheet" href="crudAppStyle.css">
</head>
<body>
    <div class="container">
        <div class="crudBox">
            <div class="cardHeader">
                <h2>User CRUD Application</h2>
            </div>
            <div class="addBtn">
                <button class="button-Add"><a href="add.php">Add New</a></button>
            </div>
            <div class="cardBody">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            require 'config.php';
                            $sql = "select * from customer";
                            $result = $connection->query($sql);

                            if($result){
                                while($row = $result->fetch_assoc()){
                                    $id = $row['id'];
                                    $fname = $row['firstName'];
                                    $lname = $row['lastName'];
                                    $email = $row['email'];
                                    $password = $row['password'];

                                    echo '<tr>
                                    <td>'.$id.'</td>
                                    <td>'.$fname.'</td>
                                    <td>'.$lname.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$password.'</td>
        
                                    <td>
                                        <div class="btn">
                                            <div class="edit-btn">
                                            <button> <a href="edit.php?updateid='.$id.'">Update</a></button>
                                            </div>
                                            <div class="delete-btn">
                                            <button> <a href="delete.php?delete='.$id.'">Delete</a></button>
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

