<?php
    session_start();
    require_once('../inc/connect.php');
?>
<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title> 
</head>
<body>
    <?php include('./inc/nav.php') ?>
    <?php 
        $sql = "SELECT * FROM users ";
        $result = executeResult($sql);
        foreach($result as $row){
    ?>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Total Likes</span>
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Comments</span>
                        <span class="number">20,120</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Total Share</span>
                        <span class="number">10,120</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Account</span>
                </div>

                <div class="activity-data">
                <div class="data status">
                        <span class="data-title">Username</span>
                        <span class="data-list"><?= $row['username'] ?></span>
                    </div>
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list"><?= $row['name'] ?></span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list"><?= $row['email'] ?></span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <span class="data-list"><?= $row['join_at'] ?></span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list"><?= $row['account_type'] ?></span>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <script src="script.js"></script>
</body>
</html>