<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php
    require('db.php');
    // jika di klik submit, maka akan melakukan input data
    if (isset($_REQUEST['username'])){
        // Menghilangkan backslashes
        $username = stripslashes($_REQUEST['username']);
        //Meloloskan dari karakter khusus dalam sebuah string
        $username = mysqli_real_escape_string($con,$username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $nama = stripslashes($_REQUEST['nama']);
        $nama = mysqli_real_escape_string($con,$nama);
        $level = stripslashes($_REQUEST['level']);
        $level = mysqli_real_escape_string($con,$level);
        
        $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT INTO `tb_login` (username, password,nama, email, trn_date,level) VALUES 
        ('$username', '".md5($password)."', '$email','$nama', '$trn_date','$level')";
        $result = mysqli_query($con,$query);
        if($result){
            echo"<div class='form'>
            <h3>Registrasi Anda Berhasil.</h3>
            <br/>Klik Disini Untuk Kembali Ke halaman Login <a href='login.php'>Login</a></div>";
        }
        }else{  
    ?>
    <div class="form">
        <h1>Form Registrasi</h1>
        <form name="registration" action="" method="post">
            <input type="text" name="username" placeholder="Username" required />
            <input type="email" name="email" placeholder="Email" required />
            <input type="password" name="password" placeholder="Password" required />
            <input type="text" name="nama" placeholder="Nama Lengkap" required />
            <input type="text" name="level" placeholder="Level" required />
            <input type="submit" name="submit" value="Register" />
        </form>
    </div>
    <?php } ?>
</body>
</html>