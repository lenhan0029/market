
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Market online</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./vegetable/index.php">Vegetable</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./cart/index.php">Cart</a>
    </li>
    <li class="nav-item" id="customer-nav">
      <?php
        if(!isset($_SESSION['cusid'])){
            echo "<button class='btn btn-info' id='btn-login' onclick='";
            echo 'window.location="customer/login.php"';
            echo "'>Login</button>";
        }else{
            echo "<ul class='navbar-nav' id='cus-info'>";
            echo "<li class='nav-item'><a class='nav-link' href='./cart/history.php'>History</a></li>";
            echo "<li class='nav-item'><button class='btn btn-info'><a class='nav-link' href='./customer/logout.php'>Logout</a></button></li>";
            echo "<li class='nav-item'><a class='nav-link' href='#'>" . $_SESSION['fullname'] . "</a></li>";
            echo "</ul>";
        }
      ?>
    </li>
  </ul>
</nav>