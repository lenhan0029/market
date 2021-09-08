<?php
    session_start();
    include "../connection.php";
    include "../class/customer.php";
    include "../class/vegetable.php";
    include "../class/category.php";
    include "../class/order.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
    <?php
        // require "../menu.php";
        // session_destroy();
    ?>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <button class="btn btn-info"><a href="../index.php">Trang chủ</a></button>
    </nav>
    <div class="filter">
        <form id="filter">
        <div>Category name</div>
        <?php
            $ct = new category;
            $kq = $ct->getAll();
            foreach ($kq as $key =>$value){
                echo "<input class='filter-item' type='checkbox' name='category-item[]' value='".$value[0]."'>";
                echo $value[1];
                echo "<br>";
            }

        ?>
        <button type="button" class="btn btn-info" onclick="filter()">Filter</button>
        </form>
    </div>
    <div class="contain">
        <h1>VEGETABLE</h1>
        <div id="items">
        <?php
        $sp = new vegetable;
        $rs = $sp->getAll();
        foreach ($rs as $key=> $value){
            echo "<div class='item'>";
            echo "<img src='../".$value[5]."' alt='#' class='image-item'>";
            echo "<div class='name-item'>".$value[2]."</div>";
            echo "<div class='price-item'>".$value[6]."</div>";
            echo "<button class='btn btn-danger' onclick='addToCart(".$value[0].")'>buy</button>";
            echo "</div>";
        }
        ?>
        </div>
    </div>
    <script src="../js/vegetable.js"></script>
    <script src="../js/cart.js"></script>
</body>
</html>