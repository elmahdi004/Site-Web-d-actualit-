<?php session_start();
include "connection.php";
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style><?php include "../design/blogs.css";
    include "../design/all.min.css";
    if($_SESSION["Admin"] === 'false'){
        echo "
        .dashboard,.add-btn{
            display:none;
        }
        ";
    }
    ?></style>
 </head>
 <body>
 <div class="container">
        <div class="nav">
            <div class="logo">
                    <h3>E<span>bellaziz</span>
                    </h3>
            </div>
             <h5>Ebellziz's Blogs</h5>
             <div class="menu">
                <a href="#"><i class="fa-regular fa-user"></i></a>
             </div>
             <div class="user active">
             <div class="close">
                    <a href="#"><i class="fa-solid fa-xmark"></i></a>
                </div>
                <p class="welcome">Welcome , Back :</p>
                <p class="flname"><?php echo $_SESSION["lastName"] . " " . $_SESSION["firstName"] ?></p>
                <div class="add-btn">
                <a href="#"><i class="fa-solid fa-plus"></i><span>Add Blog</span></a>
                </div>
                <div class="dashboard">
                    <a href="dashboard.php" target="_blank"><i class="fa-solid fa-gauge"></i>dashboard</a>
                </div>
                <div class="search">
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i>Search</a>
                </div>
                <div class="logout">
                    <a href="login.php" target="_blank"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                </div>
            </div>
            <div class="add active">
                    <form action="add.php" method="POST" enctype="multipart/form-data">
                    <div class="close">
                    <a href="#"><i class="fa-solid fa-xmark"></i></a>
                </div>
                        <label for="">Add Title:</label><br>
                        <input type="text" name="title" required>
                        <br>
                        <label for="">Add desciption:</label><br>
                        <textarea name="desciption" id="des" cols="30" rows="10" required></textarea><br>
                        <label for="">Add Image:</label><br>
                        <input type="file" name="image" id="image" required><br>
                        <input type="submit" value="ADD" name="add">
                    </form>
                </div>
                <div class="search-section active">
                    <div class="close">
                    <a href="#"><i class="fa-solid fa-xmark"></i></a>
                    </div>
                    <form action="search.php" method="post">
                        <label for="">Search:</label>
                        <br>
                        <input type="search" name="search" id="">
  <br><br>
  <input type="submit" value="Search">
                    </form>
                </div>
            </div>
            </div>
            <div class="blogs">
            <div class="container">
            <?php $blog = $connection->query("SELECT * from blogs");
            ?>
         <?php while($data = $blog->fetch()){?>
                <div class="blog-child">
                    <div class="image">
                        <!-- <img src="../img-add/" alt="" srcset=""> -->
                        <?php echo "<img src='../img-add/$data[blogImg]' alt='test'>" ?>
                    </div>
                    <div class="text">
                    <h3><?php echo $data["blogTitle"]?></h3>
                    <p><?php echo $data["blogDes"]?></p>
                    </div>
                </div>
           <?php } ?>
           </div>
           </div>
            <script src="../js/blogs.js">
            </script>
 </body>
 </html>
 <?php
?>