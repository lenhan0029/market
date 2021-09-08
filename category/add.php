<?php
include "../connection.php";
include "../class/customer.php";
include "../class/vegetable.php";
include "../class/category.php";
include "../class/order.php";

if(isset($_POST['catename'])){
    $cate['Name']=$_POST['catename'];
}else{
    $cate['Name']='';
}
if(isset($_POST['catedec'])){
    $cate['Description']= $_POST['catedec'];
}else{
    $cate['Description']='';
}
if($cate['Name'] != ''){
    $n = new category;
    $n->add($cate);
    echo "<script>window.location='index.php'</script>";
}else{
    echo "<script>alert('phải nhập tên danh mục')</script>";
    echo "<script>window.location='index.php'</script>";
}
?>