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
    <div class="cart-contain">
        <h2>History</h2>
        <table class="table history">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Date</td>
                    <td>Total</td>
                    <td>Detail</td>
                </tr>
            </thead>
            <tbody>
            <?php
                $i=0;
                $cusid=$_SESSION['cusid'];
                $hi = new order;
                $history = $hi->getAllOrder($cusid);
                foreach($history as $key=> $value){
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $value[2];?></td>
                    <td><?php echo $value[3]?></td>
                    <td><button class="btn btn-info"><a href="detail.php?orderid=<?php echo $value[0]?>">Detail</a></button></td>
                </tr>
            <?php
                $i+=1;}
            ?>
            </tbody>
        </table>
    </div>
    <script src="../js/order.js"></script>
    <script src="../js/cart.js"></script>
    <script src="../js/vegetable.js"></script>
</body>
</html>