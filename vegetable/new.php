<?php
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
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <button class="btn btn-info"><a href="../index.php">Trang chủ</a></button>
    </nav>
    <form action="add.php" method="post" id="addvege-form" enctype="multipart/form-data">
        <h2>Add vegetable</h2>
        <div class="form-item">
            <label for="vegename">Vegetable Name:</label>
            <input type="text" class="form-control" placeholder="" id="vegename" name="vegename">
        </div>
        <div class="form-item">
            <label for="catename1">Category Name:</label>
            <select name="catename1" id="catename1" class="form-control">
                <?php
                $c = new category;
                $cate = $c->getAll();
                foreach($cate as $key=> $value){
                    echo "<option value='".$value[0]."'>".$value[1]."</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-item">
            <label for="unit">Unit:</label>
            <select name="unit" id="unit" class="form-control">
                <?php
                $u = new vegetable;
                $unit = $u->getUnit();
                foreach($unit as $key=> $value){
                    echo "<option value='".$value[0]."'>".$value[0]."</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-item">
            <label for="amount1">Amount</label>
            <input type="number" class="form-control" placeholder="" id="amount1" name="amount1">
        </div>
        <div class="form-item">
            <label for="price1">Price:</label>
            <input type="number" class="form-control" placeholder="" id="price1" name="price1">
        </div>
        <div class="form-item">
            <label for="image1">Image:</label>
            <input type="file" class="form-control" id="image1" name="uploadFile">
        </div>
        <button type="submit" class="btn btn-info" name="submit" value="Upload">Add</button>
    </form>
</body>
</html>