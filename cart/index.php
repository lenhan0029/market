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
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <button class="btn btn-info"><a href="../index.php">Trang chủ</a></button>
    </nav>
    <?php
        session_start();
        include "../connection.php";
        include "../class/customer.php";
        include "../class/vegetable.php";
        include "../class/category.php";
        include "../class/order.php";
    ?>
    <div class="cart-contain" id="cart-contain">
        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) != 0) {
        ?>
        <h2>Cart</h2>
        <table class="table" id="cart">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Picture</td>
                    <td>Amount</td>
                    <td>Price</td>
                </tr>
            </thead>
            <tbody>
            <?php
                $i=1;
                $totalprice=0;
                $totalamount=0;
                foreach ($_SESSION['cart'] as $product) {
                    $totalamount += $product['qty'];
                    $totalprice += $product['Price'] * $product['qty'];
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $product['VegetableName'];?></td>
                    <td><img src="../<?php echo $product['Image'];?>" alt="#"></td>
                    <td><?php echo $product['qty'];?></td>
                    <td><?php echo ($product['Price'] * $product['qty']);?></td>
                </tr>
            <?php
                $i+=1;}
            ?>
            </tbody>
            <tfoot>
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td><?php echo $totalamount;?></td>
                    <td><?php echo $totalprice?></td>
                </tr>
            </tfoot>
            
        </table>
        <button class="btn btn-danger order-btn" onclick="order()">Order</button>
        <?php
        }else{
            echo "<h1 style='width:100%;text-align: center;'>Trống</h1>";
        }
        ?>
        
    </div>
    <script src="../js/order.js"></script>
    <script src="../js/cart.js"></script>
    <script src="../js/vegetable.js"></script>
</body>
</html>