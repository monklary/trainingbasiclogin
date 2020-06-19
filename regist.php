<?php

session_start();

if(isset($_SESSION['username']){
    $_SESSION['msg'] = "silahkan login dahulu";
    header("location : login.php");
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location : login.php")
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<h1>Homepage</h1>
<?php if(isset($_SESSION['success'])) : ?>
<div>
<h3>
<?php 
    echo $_SESSION['success'];
    unset($_SESSION['success']);
    ?>
</h3>

</div>
<?php endif ?>
<?php if(isset($_SESSION['username'])) :?>
    <h3>Selamat datang<strong><?php echo $_SESSION['username'];?></strong></h3>
    <button><a href="regist.php?logout='1'"></a></button>
<?php endif ?>    
</body>
</html>