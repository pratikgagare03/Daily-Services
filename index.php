
<?php 
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location:register.html');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Services</title>
    <link rel="stylesheet" href="index1.css">
</head>

<body>

    <div class="main">

        <div class="nav">
            <div class="logo">
                <a href="index.php">
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
                    <li><a href="./logout.php" style="text-decoration: none;">Logout</a></li>
                    <li><a href="./Login.html" style="text-decoration: none;">Login</a></li>
                    <li><a href="./Register.html" style="text-decoration: none;">SignUp</a></li>
                </ul>
            </div>
        </div>

        <div class="section1">

        </div>

        <div class="services">
            <h2>Services</h2>
            <div class="services__inner">
                <a href="./services/electrician.php">
                    <div class="service">
                        <div>
                            <img src="./Images/icons/electrician.png" alt="">
                        </div>
                        <div>
                            <span>Electrician</span>
                        </div>
                    </div>
                </a>

                <a href="./services/plumber.php">
                    <div class="service">
                        <div>
                            <img src="./Images/icons/plumber.png" alt="">
                        </div>
                        <div>
                            <span>Plumber</span>
                        </div>
                    </div>
                </a>
                
                <a href="./services/painter.php">
                    <div class="service">
                        <div>
                            <img src="./Images/icons/painter.png" alt="">
                        </div>
                        <div>
                            <span>Painter</span>
                        </div>
                    </div>
                </a>

                <a href="./services/gardener.php">
                    <div class="service">
                        <div>
                            <img src="./Images/icons/gardener.png" alt="">
                        </div>
                        <div>
                            <span>Gardener</span>
                        </div>
                    </div>
                </a>
                
                <a href="./services/carpenter.php">
                    <div class="service">
                        <div>
                            <img src="./Images/icons/painter.png" alt="">
                        </div>
                        <div>
                            <span>Carpenter</span>
                        </div>
                    </div>
                </a>
                
            </div>
        </div>

        <div class="about">
            <h2>Daily <span> Services</span></h2>
            <h3>Onestop Solution for all kind of your Work</h3>
            <h4>Do You Require Plumber, Electrician, Painter, Gardner, Carpenter <span> ? </span> We have all Verified Professionals of your Location Listed on Our Site. Login and get details of Professionals of your location.</h4>
        </div>

        <div class="join">
            <div class="left">
                <img src="./Images/join.webp" alt="">
            </div>
            
            <div class="right">
                <h2>Are you Electrician, Painter, Plumber or a Worker </h2>
                <h1> Searching for the work? </h1>
                <h2>Join us We will help you to find a work</h2>
                <button><a href="./JoinUs/joinus.html">Join Us</a></button>
            </div>
            
        </div>

    </div>

        <script src="index.js"></script>
        <script src="https://kit.fontawesome.com/3d43d3975e.js" crossorigin="anonymous"></script>
</body>

</html>