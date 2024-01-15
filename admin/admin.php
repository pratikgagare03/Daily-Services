<?php 


    session_start();
    if(!isset($_SESSION['adminemail'])){
        header('Location:adminLogin.html');
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dailyservices";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }

    $sql = "SELECT * FROM worker";
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
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="main">
        <button class="logout"><a href="logout.php"> Logout</a></button>
        <div class="heading">
            <h1>Admin Page</h1>        
        </div>
        <div id="workerData" class="workerData">
        </div>
    </div>

    <script>

        let js_data = JSON.parse('<?php echo $json_data; ?>');

        js_data.map((item)=>{
        document.getElementById("workerData").innerHTML += `

        <div class="workerProfile">
            
            <div class="description">
                <h3>Company Name : ${item.companyName}</h3>
                <h4>Name : ${item.name}</h4>
                <h4>Aadhar Number : ${item.aadhar}</h4>
                <h4>Category : ${item.category}</h4>
                <h4>Experience : ${item.experience} Years</h4>
                <h4>Address : ${item.address}</h4>
                <h4>City : ${item.city.charAt(0).toUpperCase() + item.city.slice(1)}</h4>
                <h4>Email : ${item.email}</h4>
                <h4>Contact Number : ${item.phone}</h4>
                <h4>Verified : ${item.verified}</h4>
            </div>

            <div class="buttons">
                <form action="./verify.php" method="post">
                    <input style="display:none" type="hidden" name="verify" value="${item.aadhar}">
                    <button style="background-color: red">Verify</button>
                </form>
                <form action="./block.php" method="post">
                    <input style="display:none" type="hidden" name="block" value="${item.aadhar}">
                    <button style="background-color: green">Block</button>
                </form>
            </div>

        </div>`;
    })
    </script>


    
</body>

</html>