<?php
    session_start();
    $city = strtolower($_SESSION['city']);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dailyservices";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }

    $sql = "SELECT * FROM worker where category='gardner' && city='$city' && verified = True";
    $result = mysqli_query($conn,$sql);

    $data = array();
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    $json_data = json_encode($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gardner</title>
    <link rel="stylesheet" href="services.css">
</head>
<body>
    <div class="tempMain">
        <div class="nav">
            <div class="logo">
                <a href="../index.php">
                    <h2>
                        <i class="fa-sharp fa-solid fa-bolt"></i> 
                        Daily <span>Services</span>
                    </h2>
                </a>  
            </div>
            <div class="userinfo">
                <span>Welcome  <?php echo $_SESSION['email'] ?></span>
                <span><?php echo $_SESSION['city'] ?></span>
            </div>
            <div>
                <ul>
                    <li><a href="../logout.php" style="text-decoration: none;">Logout</a></li>
                    <li><a href="../Login.html" style="text-decoration: none;">Login</a></li>
                    <li><a href="../Register.html" style="text-decoration: none;">SignUp</a></li>
                </ul>
            </div>
        </div>
        <div class="heading">
            <h1>Best Electrician Service Near You</h1>
        </div>
        <div id="output" class="output"></div>
    </div>

    <script>
        let js_data = JSON.parse('<?php echo $json_data; ?>');

        if(js_data.length === 0){
            document.getElementById("output").innerHTML += `<h2 class="error"> Currently Gardner Service is Not availbale at your location </h2>`;
        }

        js_data.map((item)=>{
            document.getElementById("output").innerHTML += `
            <div class="profile">
                <div class="img">
                    <img src="../Images/electric.jpg" alt="">
                </div>

                <div class="description">
                    <i class=" like fas fa-heart"></i>
                    <h3>${item.companyName}</h3>
                    <h4>Owner : ${item.name}</h4>
                    <h4>${item.experience} years Experience</h4>
                    <h4>${item.address}</h4>
                    <h4>${item.city.charAt(0).toUpperCase() + item.city.slice(1)}</h4>
                    <h4>Email : ${item.email}</h4>

                    <div class="button">
                        <button><a href="tel:${item.phone}"><i class="fas fa-phone"></i> ${item.phone}</a></button>
                    </div>
                </div>
                
            </div>
            `;
        })
    </script>

<script src="https://kit.fontawesome.com/3d43d3975e.js" crossorigin="anonymous"></script>

</body>
</html>