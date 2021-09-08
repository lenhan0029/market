<?php
    class vegetable extends Database {
        public function __construct(){
            parent::connect();
        }
        public function getAll(){
            $conn = parent::connect();
            $sql = "SELECT * FROM vegetable";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                $data[]=$row;
            }
            return $data;
        }
        public function getListByCateID($cateid){
            $conn = parent::connect();
            $sql = "SELECT * FROM vegetable WHERE CategoryID='$cateid'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                $data[]=$row;
            }
            return $data;
        }
        public function getListByCateIDs($cateids){
            $conn = parent::connect();
            $sql = "SELECT * FROM vegetable WHERE CategoryID IN ($cateids)";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                $data[]=$row;
            }
            return $data;
        }
        public function getByID($vegetableID){
            $conn = parent::connect();
            $sql = "SELECT * FROM vegetable WHERE VegetableID='$vegetableID'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $data[]=$row;
            }
            return $data;
        }
        // add
        public function add($vege){
            $conn = parent::connect();
            $sql = "INSERT INTO vegetable VALUES('','".$vege['CategoryID']."',
                                            '".$vege['VegetableName']."','".$vege['Unit']."',
                                            '".$vege['Amount']."','".$vege['Image']."',
                                            '".$vege['Price']."')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                echo"<script>alert('Thêm thành công');</script>";
            
            }
            else {
                echo"<script>alert('Thêm thất bại');</script>";
            }
        }
        public function getUnit(){
            $conn = parent::connect();
            $sql = "SELECT DISTINCT Unit FROM vegetable ORDER BY Unit";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                $data[]=$row;
            }
            return $data;
        }
    }

?>