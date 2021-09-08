<?php
    class order extends Database {
        public function __construct(){
            parent::connect();
        }
        public function getAllOrder($cusid){
            $conn = parent::connect();
            $sql = "SELECT * FROM orders WHERE CustomerID='$cusid'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                $data[]=$row;
            }
            return $data;
        }
        public function getOrderDetail($orderid){
            $conn = parent::connect();
            $sql = "SELECT * FROM orderdetail WHERE OrderID='$orderid'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                $data[]=$row;
            }
            return $data;
        }
        public function addOrder($order){
            $conn = parent::connect();
            $sql = "INSERT INTO orders VALUES('".$order['OrderID']."','".$order['CustomerID']."','".$order['Date']."',
                                            '".$order['Total']."','".$order['Note']."')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                echo"<script>alert('Thêm thành công');</script>";
            }
            else {
                echo"<script>alert('Thêm thất bại');</script>";
            }
        }
        public function addOrderDetail($detail){
            $conn = parent::connect();
            $sql = "INSERT INTO orderdetail VALUES('".$detail['OrderID']."','".$detail['VegetableID']."',
                                                '".$detail['Quantity']."','".$detail['Price']."')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                echo"<script>alert('Thêm thành công');</script>";
            }
            else {
                echo"<script>alert('Thêm thất bại');</script>";
            }
        }
        // hàm viết thêm
        public function getMaxOrderID(){
            $conn = parent::connect();
            $sql = "SELECT MAX(OrderID) FROM orders";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                $data[]=$row;
            }
            return $data;
        }
    }
?>