<?php
session_start();
include "../connection.php";
include "../class/customer.php";
include "../class/vegetable.php";
include "../class/category.php";
include "../class/order.php";

    $vegetableID= $_POST['vegetableID'];

    $v = new vegetable;
    $newProduct = $v->getByID($vegetableID);

    if (!isset($_SESSION['cart']) || $_SESSION['cart'] == null) {
        $_SESSION['cart']["$vegetableID"] = $newProduct;
        $_SESSION['cart']["$vegetableID"]['qty'] = 1;
        foreach($newProduct as $key=> $value){
            $_SESSION['cart']["$vegetableID"]['Price'] = $value['Price'];
            $_SESSION['cart']["$vegetableID"]['Image'] = $value['Image'];
            $_SESSION['cart']["$vegetableID"]['VegetableID'] = $value['VegetableID'];
            $_SESSION['cart']["$vegetableID"]['VegetableName'] = $value['VegetableName'];
            if($_SESSION['cart']["$vegetableID"]['qty'] > $value['Amount']){
                $_SESSION['cart']["$vegetableID"]['qty'] -= 1;
                echo "hết hàng";
            }else{
                echo "thêm thành công!";
            }
        }
    } else {
        if (array_key_exists($vegetableID,$_SESSION['cart'])) {
            $_SESSION['cart']["$vegetableID"]['qty'] += 1;
            foreach($newProduct as $key=> $value){
                if($_SESSION['cart']["$vegetableID"]['qty'] > $value['Amount']){
                    $_SESSION['cart']["$vegetableID"]['qty'] -= 1;
                    echo "hết hàng";
                }else{
                    echo "thêm thành công!";
                }
            }
        } else {
            $_SESSION['cart']["$vegetableID"] = $newProduct;
            $_SESSION['cart']["$vegetableID"]['qty'] = 1;
            foreach($newProduct as $key=> $value){
                $_SESSION['cart']["$vegetableID"]['Price'] = $value['Price'];
                $_SESSION['cart']["$vegetableID"]['Image'] = $value['Image'];
                $_SESSION['cart']["$vegetableID"]['VegetableID'] = $value['VegetableID'];
                $_SESSION['cart']["$vegetableID"]['VegetableName'] = $value['VegetableName'];
                if($_SESSION['cart']["$vegetableID"]['qty'] > $value['Amount']){
                    $_SESSION['cart']["$vegetableID"]['qty'] -= 1;
                    echo "hết hàng";
                }else{
                    echo "thêm thành công!";
                }
            }
        }
    }
    
    
?>