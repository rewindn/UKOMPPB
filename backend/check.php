<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "select * from `tb_login` where username='$username'  and password='$password'");

$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    if ($data['akses'] == "master") {

        $_SESSION['username'] = $username;
        $_SESSION['akses'] = "master";

        header("location:module/master/side.php");
    } else if ($data['akses'] == "pengguna") {

        $_SESSION['username'] = $username;

        $_SESSION['akses'] = "pengguna";

        header("location:module/pengguna/side.php");
    } else if ($data['akses'] == "siswa") {

        $_SESSION['username'] = $username;

        $_SESSION['akses'] = "siswa";

        header("location:module/siswa/side.php");
    } else {

        header("location:index.php?pesan=gagal");
    }
} else {
    header("location:index.php?pesan=gagal");
}
