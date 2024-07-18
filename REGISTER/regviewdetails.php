<!DOCTYPE html><html>
    <head>
        <title>VIEW DETAILS</title>
        <link href="\CONSTRUCTION_MANAGEMENT_SYSTEM\REGISTER\regregister.css" rel="stylesheet">
        <link href="\CONSTRUCTION_MANAGEMENT_SYSTEM\REGISTER\regheader.css" rel="stylesheet">
    </head>
    <body>

    <header>
        <!--<img src="images/company logo.jpg" alt=""> -->
        <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\Home\index.php" class="brand">SVM</a>
        <div class="menu-btn">
            <div class="navigation">
                <div class="navigation-items">
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\Home\index.php">Home</a>
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\Payment\project.php">Projects</a>
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\SERVICES\service.php">Services</a>
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\VACANCY\vacAboutus.php">About Us</a>
                    <!--<a href="#">Contact</a>-->
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\VACANCY\vacvacancy.php">Jobs</a>
                    <a href="\CONSTRUCTION_MANAGEMENT_SYSTEM\Home\login.php">Login</a>
                </div>
            </div>
        </div>
    </header>

    <?php
$connection = new mysqli("localhost", "root", "", "mathuregisterdb");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}session_start();

$last_inserted_id = null;

if(isset($_SESSION['last_inserted_id'])) {
    $last_inserted_id = $_SESSION['last_inserted_id'];
}

$sql = "SELECT * FROM registration WHERE id='$last_inserted_id'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
   
    
    echo "<div id='heading'>";
    echo "<h2>Your Registration Details</h2>";
    echo "</div>";
    echo "<div class='details-collection'>";
    echo "<p><strong>First Name:</strong> " . $row['Fname'] . "</p>";
    echo "<p><strong>Last Name:</strong> " . $row['Lname'] . "</p>";
    echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
    echo "<p><strong>Phone:</strong> " . $row['phone'] . "</p>";
    echo "<p><strong>NIC:</strong> " . $row['nic'] . "</p>";
    echo "<p><strong>DOB:</strong> " . $row['dob'] . "</p>";
    echo "<p><strong>Address:</strong> " . $row['address'] . "</p>";
    echo "<p><strong>Company Name:</strong> " . $row['Cname'] . "</p>";
    echo "<p><strong>Gender:</strong> " . $row['gender'] . "</p>";
    echo "<p><strong>Language:</strong> " . $row['lang'] . "</p>";
    echo "<p><strong>Project Name:</strong> " . $row['pro'] . "</p>";
    echo "<p><strong>Qualification Level:</strong> " . $row['qua'] . "</p>";
    echo "</div>";

} else {
    echo "<div class='details-collection'>";
    echo "No registrations found.";
    echo "</div>";
}

$connection->close();
?>
<div id="success-button"> <button onclick="window.location.href='regedit.php'">Edit Details</button>
<button id="back-button" ><a href='\CONSTRUCTION_MANAGEMENT_SYSTEM\Home\index.php' >Bact to home</a></button>


    </body>
</html>

