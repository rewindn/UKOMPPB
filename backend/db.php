<?php
// Masukan host, username, password,  database anda
//jika tidak menggunakan password maka kosongkan
$con = mysqli_connect("localhost", "root", "", "faris&cipeng");
//cek koneksi
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$login = mysqli_query($con, "select * from  `siswa` ");
$data = mysqli_fetch_assoc($login);
var_dump($data);


foreach ($data as $login) {
    echo $login;
}
