<?php
include "../connection.php";
include "../class/customer.php";
include "../class/vegetable.php";
include "../class/category.php";
include "../class/order.php";

$vege['VegetableName']=$_POST['vegename'];
$vege['Unit']= $_POST['unit'];
$vege['Price']= $_POST['price1'];
$vege['Amount']= $_POST['amount1'];
$vege['CategoryID']= $_POST['catename1'];

if (isset($_POST['submit'])) {
    if ($_FILES['uploadFile']['name'] != NULL) {
        // Kiểm tra file up lên có phải là ảnh không
        if ($_FILES['uploadFile']['type'] == "image/jpeg" || $_FILES['uploadFile']['type'] == "image/png" ) {
            if ($_FILES['uploadFile']['size'] <= 2000000){
            $path = "images/"; // Ảnh sẽ lưu vào thư mục images

            $tmp_name = $_FILES['uploadFile']['tmp_name'];
            $name = $_FILES['uploadFile']['name'];
            // Upload ảnh vào thư mục images
            move_uploaded_file($tmp_name, $path.$name);
            $image_url = $path . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
            $vege['Image']=$image_url;
            }else{
                echo "dung lượng lớn hơn 20mb";
            }
        } else {
            // Không phải file ảnh
            echo "Kiểu file không phải là ảnh";
        }
    } else {
        echo "Bạn chưa chọn ảnh upload";
    }
    $n = new vegetable;
    $n->add($vege);
    echo "<script>window.location='new.php'</script>";
}
?>