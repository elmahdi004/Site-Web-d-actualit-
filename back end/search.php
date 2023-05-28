<?php include "connection.php";
$searchValue = $_POST["search"];
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
    ?></style>
</head>
<body>
<div class="blogs">
            <div class="container">
            <?php $blog = $connection->query("SELECT * from blogs where blogTitle like '%$searchValue%'");
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
           <script src="../js/search.js"></script>
</body>
</html>