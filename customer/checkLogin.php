<?php
    session_start();
    include "../connection.php";
    include "../class/customer.php";

    $cusid = $_POST["customerid"] ;
    $pwd = $_POST["password"];

    $c = new customer;
    $rs = $c->getByID($cusid);
    if($rs != "1"){
        foreach ($rs as $key=> $value) {
            if($pwd == $value[1]){
                $_SESSION['cusid'] = $value[0];
                $_SESSION['password'] = $value[1];
                $_SESSION['fullname']  = $value[2];
                $_SESSION['address'] = $value[3];
                $_SESSION['city'] = $value[4];
                echo "<script>window.location='../vegetable/index.php';</script>";
            }else{
                echo "<script>alert('Nhập sai password!')</script>";
                echo "<script>window.location='login.php';</script>";
            }
        }
    }else{
        echo "<script>alert('Không tìm thấy tài khoản')</script>";
        echo "<script>window.location='login.php';</script>";
    }

?>