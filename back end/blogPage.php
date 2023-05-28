<?php 
session_start();
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
    <style><?php include "../design/blogPage.css";
    include "../design/all.min.css";
    ?></style>
</head>
<body>
    <?php 
    // Here We Have Id Blog Selected
    $data = $connection->query("SELECT blogId from blogs where blogTitle = '$_COOKIE[blogTitle]'");
    // And Hare We selected The Blog
    $id = $data->fetch();
    $_SESSION['blogId'] = $id['blogId'];
    // For Use It In Comment
    $data_2 = $connection->query("SELECT * from blogs Where blogId = $id[blogId]");
    $data_2_fetch = $data_2->fetch();
    ?>
    <div class="add-comment active">
    <div class="close">
                    <a href="#"><i class="fa-solid fa-xmark"></i></a>
                </div>
        <form action="comment.php" method="post">
            <label for="">Comment:</label>
            <br><br>
            <textarea name="comment" id="" cols="30" rows="10"></textarea>
            <br><br>
            <input type="submit" value="comment">
        </form>
    </div>
    <div class="blog">
        <?php echo "
        <div class='image'>
            <img src='../img-add/$data_2_fetch[blogImg]' alt='image'>
        </div>
        <div class='text'>
            <h3>$data_2_fetch[blogTitle]</h3>
            <p>$data_2_fetch[blogDes]</p>
            </div>"
            ?>
        <div class="comment">
            <div class="comment-btn">
                <a href="#"><i class="fa-regular fa-comment"></i></a>
            </div>
            <?php
            $comment = $connection->query("SELECT * from users join comments where id = idUser and idBlog = '$id[blogId]'");
            while($comment_fetch = $comment->fetch()){
           echo " <div class='comment-child'>
                <h5>$comment_fetch[firstName] $comment_fetch[lastName]</h5>
                <p>$comment_fetch[commentContent]</p>
            </div>";
};
            ?>
        </div>
    </div>
    </div>
    <script src="../js/blogPage.js"></script>
</body>
</html>