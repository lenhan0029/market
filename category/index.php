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
    <div class="cateform">
        <form id="cateform" action="add.php" method="post">
            <label for="catename">Name:</label>
            <input type="text" name="catename" id="catename">
            <label for="catedec">Description:</label>
            <input type="text" name="catedec" id="catedec">
            <button type="submit" class="btn btn-info">Add</button>
        </form>
    </div>
    <div class="contain" id="cateinfo">
        <h2>Category</h2>
        <table class="table">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Description</td>
                </tr>
            </thead>
            <tbody>
            <?php 
                $i=0;
                $c = new category;
                $cate = $c->getAll();
                foreach($cate as $key=> $value){
                    echo "<tr>";
                    echo "<td>".$i."</td>";
                    echo "<td>".$value[1]."</td>";
                    echo "<td>".$value[2]."</td>";
                    echo "</tr>";
                    $i+=1;
                }
            
            ?>
            </tbody>
        </table>
    </div>
    <script src="../js/vegetable.js"></script>
    <script src="../js/cart.js"></script>
</body>
</html>