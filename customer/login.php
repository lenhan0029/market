<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <button class="btn btn-info"><a href="../index.php">Trang chủ</a></button>
    </nav>
    <form action="checkLogin.php" method="post" id="login-form">
        <h2>Login</h2>
        <div class="form-group">
            <label for="cusid">Your's ID:</label>
            <input type="number" class="form-control" placeholder="your id" id="customerid" name="customerid">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-info">Login</button>
        <button type="button" class="btn btn-info" onclick='window.location="register.php"'>Register</button>
    </form>
    <script src="../js/checkdata.js"></script>
</body>
</html>