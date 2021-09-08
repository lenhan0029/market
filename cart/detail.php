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
        <h2>Order detail</h2>
        <table class="table">
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
                $totalamount=0;
                $totalprice=0;
                $orderid= $_GET['orderid'];
                $d = new order;
                $detail = $d->getOrderDetail($orderid);
                foreach ($detail as $key=> $value) {
                    $totalamount+=$value['Quantity'];
                    $totalprice+=$value['Price'];
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <?php 
                    $v = new vegetable;
                    $vegetablename= $v->getByID($value['VegetableID']);
                    foreach($vegetablename as $key1=>$value1){
                        echo "<td>".$value1['VegetableName']."</td>";
                        echo "<td><img src='../".$value1['Image']."'></td>";
                    } 
                    ?>
                    <td><?php echo $value['Quantity'];?></td>
                    <td><?php echo $value['Price'];?></td>
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
    </div>
    <script src="../js/order.js"></script>
    <script src="../js/cart.js"></script>
    <script src="../js/vegetable.js"></script>
</body>
</html>