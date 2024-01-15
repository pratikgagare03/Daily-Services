<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dailyservices";

$companyName = $_POST['companyName'];
$name = $_POST['name'];
$email = $_POST['email'];
$aadhar = $_POST['aadhar'];
$category = $_POST['category'];
$experience = $_POST['experience'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = strtolower($_POST['city']);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$p = "SELECT * FROM worker where email='$email' || aadhar='$aadhar'";
$result = mysqli_query($conn,$p);
$num = mysqli_num_rows($result);

if($num == 1){
  echo "Already Registered";
  header("Location:joinus.html");
}

else{
  $sql = "INSERT INTO worker (companyName,name,email,aadhar,category,experience,phone,address,city,verified)
  VALUES ('$companyName','$name','$email','$aadhar','$category','$experience','$phone','$address','$city',False)";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:../index.php");
  } 
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>
