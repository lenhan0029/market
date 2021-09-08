<?php
session_start();
include "../connection.php";
include "../class/customer.php";
include "../class/vegetable.php";
include "../class/category.php";
include "../class/order.php";
if(isset($_SESSION['cusid'])){
    $od = new order;
    $order = $od->getMaxOrderID();
    $max = 0;
    $total=0;
    foreach($order as $key=> $value){
        $max = $value[0];
    }
    $order['OrderID']=$max + 1;
    $order['CustomerID']= $_SESSION['cusid'];
    $order['Date'] = date("Y/m/d");
    foreach ($_SESSION['cart'] as $product) {
        $total += $product['Price'] * $product['qty'];
    }
    $order['Total']=$total;
    $order['Note']='';
    $od->addOrder($order);
    $detail['OrderID']=$max + 1;
    foreach ($_SESSION['cart'] as $product) {
        $detail['VegetableID']=$product['VegetableID'];
        $detail['Quantity']=$product['qty'];
        $detail['Price']=$product['Price']*$product['qty'];
        $od->addOrderDetail($detail);
        $vegeID=$product['VegetableID'];
        unset($_SESSION['cart']["$vegeID"]['Price']);
        unset($_SESSION['cart']["$vegeID"]['Image']);
        unset($_SESSION['cart']["$vegeID"]['VegetableID']);
        unset($_SESSION['cart']["$vegeID"]['VegetableName']);
        unset($_SESSION['cart']["$vegeID"]['qty']);
        unset($_SESSION['cart']);
    }
    echo "1";
}else{
    echo "0";
}

?>