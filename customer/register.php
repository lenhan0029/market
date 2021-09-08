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
    <form action="saveRegister.php" method="post" id="register-form">
        <h2>Register</h2>
        <div class="form-group">
            <label for="fullname">Your's fullname:</label>
            <input type="text" class="form-control" placeholder="your fullname" id="fullname" name="fullname">
            <div class="error-tag" id="name-er"></div>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="password" name="password">
            <div class="error-tag" id="pwd-er"></div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" placeholder="your Address" id="address" name="address">
            <div class="error-tag" id="address-er"></div>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" placeholder="your city" id="city" name="city">
            <div class="error-tag" id="city-er"></div>
        </div>
        <button type="submit" class="btn btn-info">Register</button>
    </form>
    <script src="../js/checkdata.js"></script>
</body>
</html>