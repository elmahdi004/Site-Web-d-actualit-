<?php
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
    <style><?php include "..\design\dashboard.css";
     include "../design/all.min.css";
    ?></style>
</head>
<body>
<div class='users'>
    <div class="nav">
    <div class="add-user">
                    <button>Add User</button>
                </div>
<div class="modify-section active">
                <div class="close">
                    <a href="#"><i class="fa-solid fa-xmark"></i></a>
                </div>
        <form action="modifyUser.php" method="POST">
        <label for="first_name">first name:</label>
            <br>
            <input type="text" name="first_name" id="first_name"required>
            <br><br>
            <label for="last_name">last name:</label>
            <br>
            <input type="text" name="last_name" id="last_name" required>
            <br><br>
            <label for="user_name">username:</label>
            <br>
            <input type="text" name="username" id="username" required>
            <br><br>
            <label for="mail">mail:</label>
            <br>
            <input type="text" name="mail" id="mail" required>
            <br><br>
            <label for="password">password:</label>
            <br>
            <input type="password" name="password" id="password" required>
            <br><br>
            <label for="">Admin:</label>
            <br>
            <input type="text" name="admin" id="admin" required placeholder="true / false">
            <br><br>
            <input id="signup" type="submit" value="Sign Up">
        </form>
    </div>
    <div class="modify-section active">
                <div class="close">
                    <a href="#"><i class="fa-solid fa-xmark"></i></a>
                </div>
    <form action="addUser.php" method="POST">
        <label for="first_name">first name:</label>
            <br>
            <input type="text" name="first_name" id="first_name"required>
            <br><br>
            <label for="last_name">last name:</label>
            <br>
            <input type="text" name="last_name" id="last_name" required>
            <br><br>
            <label for="user_name">username:</label>
            <br>
            <input type="text" name="username" id="username" required>
            <br><br>
            <label for="mail">mail:</label>
            <br>
            <input type="text" name="mail" id="mail" required>
            <br><br>
            <label for="password">password:</label>
            <br>
            <input type="password" name="password" id="password" required>
            <br><br>
            <label for="">Admin:</label>
            <br>
            <input type="text" name="admin" id="admin" required placeholder="true / false">
            <br><br>
            <input id="signup" type="submit" value="Sign Up">
        </form>
    </div>
    <div class="modify-blog active">
    <form action="modifyBlog.php" method="POST" enctype="multipart/form-data">
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
    </div>
    <h3>Ebellaziz's Users</h3>
    <table>
    <?php
    $users = $connection->query("SELECT * from users");
     if($users->rowCount() < 1){
        echo "<p>Empty</p>";
     }else{
    echo "
        <tr>
            <th>user Id</th>
            <th>first Name</th>
            <th>Last Name</th>
            <th>user</th>
            <th >mail</th>
            <th>password</th>
            <th>admin</th>
            <th>Modify</th>
            <th>Delete</th>
        </tr>";
while($data = $users->fetch()){
        echo "<tr>
            <td>$data[id]</td>
            <td>$data[firstName]</td>
            <td>$data[lastName]</td>
            <td>$data[username]</td>
            <td>$data[mail]</td>
            <td>$data[password]</td>
            <td>$data[idAdmin]</td>
            <td><button class='modify'>Modify</button></td>
            <td><button class='drop'>Delete</button></td>
        </tr>";

}
     }
    ?>
    </table>
    <!-- ---- Blog Table ----------------------  -->
    <h3>Ebellaziz's blogs</h3>
    <table>
    <?php
    $blogs = $connection->query("SELECT * from blogs");
     if($blogs->rowCount() < 1){
       
        echo "<p>Empty</p>";
     }else{
    echo "
        <tr>
            <th>user Id</th>
            <th>blog Id</th>
            <th>blog Title</th>
            <th>blog Des</th>
            <th >Blog Image</th>
            <th>Modify</th>
            <th>Delete</th>
        </tr>";
while($data_2 = $blogs->fetch()){
        echo "<tr>
            <td>$data_2[idUser]</td>
            <td>$data_2[blogId]</td>
            <td>$data_2[blogTitle]</td>
            <td>".substr($data_2['blogDes'],0,30)."</td>
            <td>$data_2[blogImg]</td>
            <td><button class='modifyBlog'>Modify</button></td>
            <td><button class='dropBlog'>Delete</button></td>
        </tr>";

}
     }
    ?>
    </table>
    </div>
    <script src="../js/dashboard.js">
    </script>
</body>
</html>
