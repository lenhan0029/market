function order(){
    $.ajax({
        url: "../cart/saveOrder.php",
    }).done(function(data){
        if(data != 0){
            alert("Đặt hàng thành công");
            $("#cart-contain").html("<h1 style='width:100%;text-align: center;'>Trống</h1>");
        }else{
            alert("Chưa đăng nhập");
            if(confirm("Bạn có muốn đăng nhập")){
                window.location="../customer/login.php";
            }
        }
    })
}