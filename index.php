<?php
    session_start();
    include "connection.php";
    include "class/customer.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <?php
        require "menu.php";
        // session_destroy();
        
    ?>
    <button class="btn btn-success"><a href="./category/index.php">Thêm danh mục</a></button>
    <button class="btn btn-danger"><a href="./vegetable/new.php">Thêm sản phẩm</a></button>
    <div id="home-image">
        <div><img src="images/hinhnen4.jpg" alt="#"></div>
        <div><img src="images/hinhnen1.jpg" alt="#"></div>
        <div><img src="images/hinhnen2.jpg" alt="#"></div>
        <div><img src="images/hinhnen3.jpg" alt="#"></div>
    </div>
</body>
</html>