<?php
session_start();
// unset($_SESSION['cusid']);
// unset($_SESSION['password']);
// unset($_SESSION['fullname']);
// unset($_SESSION['address']);
// unset($_SESSION['city']);
session_destroy();

echo "<script>window.location='../index.php'</script>";
?>