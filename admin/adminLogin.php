<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dailyservices";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $s = "SELECT * from admin where email='$email' && password='$password'";
    $result = mysqli_query($conn,$s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['adminemail'] = $email;
        header("Location:admin.php");
    }
    else{
        header("Location:adminLogin.html");
    }

?>