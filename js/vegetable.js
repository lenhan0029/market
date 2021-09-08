function filter(){
    $.ajax({
        type: "POST",
        url: "../vegetable/filter.php",
        data: $("#filter").serialize(),
      }).done(function(data) {
        $("#items").html(data);
      });
}