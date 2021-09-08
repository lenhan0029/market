function addToCart(vegetableID){
    $.ajax({
        type: "POST",
        url: "../cart/addToCart.php",
        data: {vegetableID: vegetableID}
    }).done(function(data){
        alert(data);
    })
}