<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <div class="container">
        <div class="header"></div>
        <h2>Register</h2>

    </div>
    <form action="index.php" method= "post">
        <div>
            <label for="username">Username : </label>
            <input type="text" name="username"required>
        </div>
        <div>
            <label for="email">Email : </label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Password : </label>
            <input type="password" name="password_1"required>
        </div>
        <div>
            <label for="password">Confirm Password : </label>
            <input type="password" name="password_2"required>
        </div>
        <button type="confirm"name="regist_user">Confirm</button>
    
        <p>Sudah punya akun ? <a href="login.php">Login disini</a></p>

    </form>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>