<?php

include 'payconnect.php';

$id = $_GET['updateid'];
 //echo "$id";



if(isset($_POST['submit']))
{
    $number=$_POST['number'];
    $name=$_POST['holder'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $cvv=$_POST['cvv'];


    $sql = "UPDATE payment SET number='$number', name='$name', month='$month', year='$year', cvv='$cvv' WHERE Id='$id'";
   
    //$result=$con->query($sql);
    $result=mysqli_query($con,$sql);

    if($result){
        //echo "Updated successfully";
        header('location:paydisplay.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit card</title>

    <link rel="stylesheet" href="paypayment.css">

</head>
<body>

    <div class="container">
        <div class="card-container">
            <div class="front">
                <div class="image">
                    <img src="\CONSTRUCTION_MANAGEMENT_SYSTEM\Payment\paying\chip.png">
                    <img src="\CONSTRUCTION_MANAGEMENT_SYSTEM\Payment\paying\visa.png">
                </div>
                <div class="card-number-box">################</div>
                <div class="flexbox">
                    <div class="box">
                        <span>card holder</span>
                        <div class="card-holder-name">full name</div>
                    </div>
                    <div class="box">
                        <span>expires</span>
                        <div class="expiration">
                            <span class="exp-month">mm</span>
                            <span class="exp-year">yy</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="back">
                <div class="stripe"></div>
                <div class="box">
                    <span>cvv</span>
                    <div class="cvv-box"></div>
                    <img src="\CONSTRUCTION_MANAGEMENT_SYSTEM\Payment\paying\visa.png" alt="">
                </div>
            </div>
        </div>

        <form action="payupdate.php?updateid=<?php echo $id; ?>" method="post">
            <div class="inputbox">

                <span>card number</span>
                <input type="text" maxlength="16" name="number" class="card-number" >

            </div>
            <div class="inputbox">

                <span>card holder</span>
                <input type="text" name="holder" class="card-holder" >

            </div>
            <div class="flexbox">
                <div class="inputbox">
                    <span>Expiration mm</span>
                    <select name="month" class="month-input" >
                        <option value="month" selected disabled>month</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="inputbox">
                    <span>Expiration yy</span>
                    <select name="year" class="year-input">
                        <option value="year" selected disabled>year</option>
                    
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        <option value="2032">2032</option>
                        <option value="2033">2033</option>
                        
                    </select>
                </div>
                <div class="inputbox">
                    <span>cvv</span>
                    <input type="text" maxlength="4" name="cvv" class="cvv-input">
                </div>
                    
            </div>
                <input type="submit" value="update" name="submit" class="update-btn">
                

        </form>
    </div>
    
     
    <script>
        document.querySelector('.card-number').oninput = () =>
        {
            document.querySelector('.card-number-box').innerText = document.querySelector('.card-number').value;
        }

        document.querySelector('.card-holder').oninput = () =>
        {
            document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder').value;
        }

        document.querySelector('.month-input').oninput = () =>
        {
            document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
        }

        document.querySelector('.year-input').oninput = () =>
        {
            document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
        }

        document.querySelector('.cvv-input').onmouseenter = () =>
        {
            document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
            document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
        }
        document.querySelector('.cvv-input').onmouseleave = () =>
        {
            document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
            document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
        }
        
        document.querySelector('.cvv-input').oninput = () =>
        {
            document.querySelector('.cvv-box').innerText =document.querySelector('.cvv-input').value;
        }
        
        

        
    </script>
    
</body>
</html>

