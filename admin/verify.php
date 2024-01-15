<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dailyservices";

$aadhar = $_POST['verify'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$p = "UPDATE worker SET verified=True where aadhar='$aadhar'";
mysqli_query($conn,$p);

echo "Update Successfully";

header("Location:admin.php");
?>
