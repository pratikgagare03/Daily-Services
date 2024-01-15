<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dailyservices";

$aadhar = $_POST['block'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$p = "UPDATE worker SET verified=False where aadhar='$aadhar'";
mysqli_query($conn,$p);

echo "Update Successfully";

header("Location:admin.php");
?>
