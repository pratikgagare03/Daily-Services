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

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = strtolower($_POST['city']);
    $password = $_POST['password'];

    $s = "SELECT * from users where email='$email'";
    $result = mysqli_query($conn,$s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "Username already Taken";
    }
    else{
        $sql = "INSERT INTO users (name,email,phone,city,password) VALUES ('$name','$email','$phone','$city','$password')";
        mysqli_query($conn,$sql);
        echo "Registration Successfull";
        header("Location:login.html");
    }

?>