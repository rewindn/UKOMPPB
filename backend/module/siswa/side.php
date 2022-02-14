<html>

<head>
    <title>UJIKOM</title>
</head>
<style type="text/css">
    body {
        margin: 0;
        padding: 0;
    }

    header {
        background: cyan;
        height: 60px;
        padding: 5px;
    }

    header .logo {
        color: yellow;
        font-size: 50px;
        float: left;
    }

    header .log {
        color: white;
        padding: 8px;
        float: right;
        background: red;
        text-decoration: none;
        margin: 15px 10px 0 0;
        border-radius: 3px;
    }

    header .log:hover {
        background: darkslategray;
    }

    .body {
        background: darkslategray;
    }

    .side {
        float: left;
        width: 18%;
        padding: 10px;
    }

    .side-tittle {

        text-align: center;
        color: silver;
        font-size: 30px;
    }

    .log-admin {
        color: yellow;
        font-size: 14px;
        background: blue;
        text-align: center;
        padding: 5px 0;
        margin: 5px 0;
    }

    .log-admin:hover {
        color: silver;
        background: dimgray;
    }

    .menu {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .menu li a {
        display: block;
        padding: 10px 5px;
        text-decoration: none;
        color: silver;
        border-bottom: 1px solid dimgray;
    }

    .menu li a:hover {
        background: dimgray;
        color: white;
    }

    .content {
        float: right;
        width: 80%;
        background: white;
        min-height: 590px;
    }

    .tittle-content {
        border-bottom: 1px solid dimgray;
        padding: 10px 5px;
    }

    .tittle-content-post {
        float: left;
        margin: 10px 0 0 0;
    }

    .add-btn {
        float: right;
        text-decoration: none;
        background: darkslategray;
        padding: 5px;
        color: white;
        margin: 0 10px;
        border-radius: 3px;
        border: 1px solid darkslategray;
    }

    .add-btn:hover {
        background: white;
        color: darkslategray;
    }

    .post {
        padding: 10px;
    }

    .tbl {
        margin: 0 auto;
    }

    .tbl tr td {
        padding: 10px 5px;
    }

    .tbl tbody:hover {
        background: silver;
        color: darkslategray;
    }

    .tbl .head td {
        text-align: center;
        background: green;
        color: white;
    }

    .tbl .bottom td {
        text-align: center;
        padding-top: 10px;
    }

    .tbl .bottom td .btn1 {
        padding: 5px;
        background: darkslategray;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        border: 1px solid darkslategray;
    }

    .tbl .bottom td .btn2 {
        padding: 5px;
        background: red;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        border: 1px solid red;
    }

    .tbl .bottom td .btn3 {
        padding: 5px;
        background: lightblue;
        color: dimgray;
        text-decoration: none;
        border-radius: 3px;
        border: 1px solid lightblue;

    }

    .tbl .bottom td .btn1:hover {
        background: white;
        color: darkslategray;
        border: 1px solid darkslategray;
    }

    .tbl .bottom td .btn2:hover {
        background: white;
        color: red;
        border: 1px solid red;
    }

    .tbl .bottom td .btn3:hover {
        background: white;
        color: lightblue;
        border: 1px solid lightblue;
    }

    .print {
        background: darkslategray;
        padding: 5px;
        border: 1px solid white;
        color: white;
        text-decoration: none;
    }

    .print:hover {
        cursor: pointer;
        background: white;
        padding: 5px;
        border: 1px solid darkslategray;
        color: darkslategray;
    }


    .frm {
        margin: 0 auto;
        width: 350px;
    }

    .frm .frm-tittle {
        border-bottom: 5px solid dimgray;
        text-align: center;
        padding: 5px 0;
        background: darkslategray;
        color: white;
        font-size: 18px;
    }

    .frm table {
        width: 100%;
    }

    .frm table tr td {
        padding: 5px 0;
    }

    .frm table .inp {
        width: 96%;
        padding: 5px 0 5px 5px;
    }

    .frm table .slct {
        width: 50%;
        padding: 5px 0;
    }

    .frm table .btn {
        background: darkslategray;
        padding: 5px;
        border: 1px solid white;
        color: white;
    }

    .frm table .btn:hover {
        cursor: pointer;
        background: white;
        padding: 5px;
        border: 1px solid darkslategray;
        color: darkslategray;
    }

    .frm-bayar .btn {
        background: darkslategray;
        padding: 5px;
        border: 1px solid white;
        color: white;
    }

    .frm-bayar .btn:hover {
        cursor: pointer;
        background: white;
        padding: 5px;
        border: 1px solid darkslategray;
        color: darkslategray;
    }

    .report .title-report {
        background: darkslategray;
        color: white;
        padding: 5px;
        border-bottom: 5px solid dimgray;
    }

    .report .inp {
        width: 100px;
    }

    .report .btn {
        background: darkslategray;
        padding: 5px;
        border: 1px solid white;
        color: white;
        float: right;
    }

    .report .btn:hover {
        cursor: pointer;
        background: white;
        padding: 5px;
        border: 1px solid darkslategray;
        color: darkslategray;
    }
</style>

<body>
    <header>
        <div class="logo" style="margin-left:30px;">Catatan<font color="white">Perjalanan Sederhana</font>
        </div>
        <a class="log" href="index1.php">Logout</a>
        <div style="clear:both"></div>
    </header>
    <div class="body">
        <div class="body">

            <div class="side">
                <div class="side-tittle">
                    SISWA
                </div>

                <div class="log-admin">
                    Selamat Datang Di WEB PEDULI DIRI, <font color="white"></font>
                </div>
                <ul class="menu">
                    <li><a href="profil.php?hal=catatan_perjalanan">Catatan Perjalanan</a></li>
                    <li><a href="propil.php?hal=catatan">Profil</a></li>
                </ul>
            </div>
        </div>
    </div>

    <td>
        <font color="purple">
            <h1 align="center">
                info ini untuk mengetahui seberapa sering kalian keluar dari rumah
                <br>dan ini adalah aplikasi hasil karya anak bangsa peserta didik
                <br>SMK Negeri 5 Kota Bekasi
            </h1>
        </font>

        <hr align="center" width="75%" color="#3a3634" size="2">


        <?php if (isset($_GET['hal'])) { ?>
    <td> <?php include 'profile.php' ?> </td>

<?php } ?>

</td>


</body>

</html>