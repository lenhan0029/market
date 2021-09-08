<?php
    include "../connection.php";
    include "../class/category.php";
    include "../class/vegetable.php";

        
        $cateids='';
        if(isset($_POST['category-item'])){
            foreach($_POST['category-item'] as $value){
                if($cateids==''){
                    $cateids = "'" .$value."'";
                }else{
                    $cateids.= ",'";
                    $cateids.=$value."'";
                }
            }
        }
        if($cateids!=''){
            $sp = new vegetable;
            $rs = $sp->getListByCateIDs($cateids);
            foreach ($rs as $key=> $value){
                echo "<div class='item'>";
                echo "<img src='../".$value[5]."' alt='#' class='image-item'>";
                echo "<div class='name-item'>".$value[2]."</div>";
                echo "<div class='price-item'>".$value[6]."</div>";
                echo "<button class='btn btn-danger'>buy</button>";
                echo "</div>";

            }
        }
?>