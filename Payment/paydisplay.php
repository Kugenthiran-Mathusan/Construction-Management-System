

<?php

include 'payconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>

    <link rel="stylesheet" href="payaddcard.css">
    
    

</head>
<body>

<div class="new">
    <button class="button">
        <a href="payuser.php">Add card</a>
    </button>
</div>
    <table class="content-table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">number</th>
            <th scope="col">name</th>
            <th scope="col">month</th>
            <th scope="col">year</th>
            <th scope="col">cvv</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>
        <tbody>
            <?php

            $sql="Select * from `payment`";
            $result=mysqli_query($con,$sql);
            if($result)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    $Id=$row['id'];
                    $number=$row['number'];
                    $name=$row['name'];
                    $month=$row['month'];
                    $year=$row['year'];
                    $cvv=$row['cvv'];

                    echo '<tr>
                    <td >'.$Id.'</td>
                    <td>'.$number.'</td>
                    <td>'.$name.'</td>
                    <td>'.$month.'</td>
                    <td>'.$year.'</td>
                    <td>'.$cvv.'</td> 
                    <td>
                    <button class="btn-1"><a href="payupdate.php?updateid= '.$Id.'">Update</a></button>
                    <button class="btn-2"><a href="paydelete.php?deleteid= '.$Id.'">Delete</a></button>
                     </td>
                    </tr>';

                  
                }
            }



            ?>

            
          
        </tbody>
      </table>
</body>
</html>


    
</body>
</html>
