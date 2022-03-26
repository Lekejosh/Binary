<?php 
session_start();

	include("mysql_connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="user.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                 <div class="logo_name" style="font-family: 'Dancing Script', cursive">Benchgrowth</div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="#">
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="./plans.html">
                <i class='bx bx-table' ></i>
                <span class="links_name">My Plans</span>
            </a>
            <span class="tooltip">My plans</span>
            </li>
            <li>
                <a href="#">
                 <i class='bx bxs-wallet-alt'></i>
                <span class="links_name">Invest</span>
            </a>
            <span class="tooltip">Invest</span>
            </li>
            <li>
                <a href="#">
                 <i class='bx bx-transfer' ></i>
                <span class="links_name">Transactions</span>
            </a>
            <span class="tooltip">Transactions</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-credit-card' ></i>
                <span class="links_name">Withdraw</span>
            </a>
            <span class="tooltip">Withdraw</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user' ></i>
                <span class="links_name">My Account</span>
            </a>
            <span class="tooltip">My Account</span>
            </li>
        </ul>
        <div class="profile-content">
            <div class="profile">
                <div class="profile_details">
                    <div class="name_job">
                        <div class="name"style="color: #fff">
                            <?php echo $user_data['firstName'];?>
                        </div>
                        <div class="email"></div>
                        <?php echo $user_data['email'];?>
                    </div>
                </div>
                <a href="logout.php">
                <i class='bx bx-log-out' id="log_out" ></i>
            </a>
            </div>
        </div>
    </div>
    <div class="home_content">
        <div class="text">Home <?php echo $user_data['user_name'];?></div>
    </div>
    <!-- <script>
        let  btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        
        btn.onclick = function(){
            sidebar.classList.toggle("active");
        }
    </script> -->
</body>
</html>