<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="container">
        <div class="header"></div>
        <h2>Login</h2>

    </div>
    <form action="index.php" method= "post">
        <div>
            <label for="username">Username : </label>
            <input type="text" name="username"required>
        </div>
        <div>
            <label for="password">Password : </label>
            <input type="password" name="password_1"required>
        </div>
        <button type="confirm"name="login_user">Confirm</button>
    
        <p>Sudah punya akun ? <a href="index.php">Register disini</a></p>
    </form>
</body>
</html>