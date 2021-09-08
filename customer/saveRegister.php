<?php
    include "../connection.php";
    include "../class/customer.php";

    $cus['Password'] = $_POST['password'];
    $cus['Fullname'] = $_POST['fullname'];
    $cus['Address'] = $_POST['address'];
    $cus['City']  = $_POST['city'];

    $cr = new customer;
    $cr->add($cus);
    echo "<script>alert('Thêm thành công!')</script>";
    echo "<script>window.location='login.php';</script>";
?>