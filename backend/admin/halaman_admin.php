<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if ($_SESSION['level']=="") {
        # code...
        header("Location:index.php?pesan=gagal");
    }
    
    ?>
    <h1>halaman admin</h1>
    <p>halo <b><?=$_SESSION['username'];?>
</b> anda login sebagai <b><?= $_SESSION['level'];?>
</b><br>
<a href="./logout.php"> LOGOUT</a>
</p>
</body>
</html>