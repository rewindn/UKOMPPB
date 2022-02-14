<html>
<head>
	<title>UJIKOM</title>
</head>
<style type="text/css">
body{
	margin: 0;
	padding: 0;
}

	header{
		background: blue;
		height: 60px;
		padding: 5px;
	}

		header .logo{
			color: yellow;
			font-size: 50px;
			float: left;
		}
		header .log{
			color: white;
			padding: 8px;
			float: right;
			background: red;
			text-decoration: none;
			margin: 15px 10px 0 0;
			border-radius: 3px;
		}

			header .log:hover{
				background: darkslategray;
			}
.body{
	background: darkslategray;
}
	.side{
		float: left;
		width: 18%;
		padding: 10px;
	}
		.side-tittle{
			text-align: center;
			color: silver;
			font-size: 30px;
		}

		.log-admin{
			color: yellow;
			font-size: 14px;
			background: blue;
			text-align: center;
			padding: 5px 0;
			margin: 5px 0;
		}

			.log-admin:hover{
				color: silver;
				background: dimgray;
			}

		.menu{
			list-style: none;
			margin: 0;
			padding: 0;
		}

			.menu li a{
				display: block;
				padding: 10px 5px;
				text-decoration: none;
				color: silver;
				border-bottom: 1px solid dimgray;
			}

				.menu li a:hover{
					background: dimgray;
					color: white;
				}

	.content{
		float: right;
		width: 80%;
		background: white;
		min-height: 590px;
	}

		.tittle-content{
			border-bottom: 1px solid dimgray;
			padding: 10px 5px;
		}

			.tittle-content-post{
				float: left;
				margin: 10px 0 0 0 ;
			}

			.add-btn{
				float: right;
				text-decoration: none;
				background: darkslategray;
				padding: 5px;
				color: white;
				margin: 0 10px;
				border-radius: 3px;
				border:1px solid darkslategray;
			}
				.add-btn:hover{
					background: white;
					color: darkslategray;
				}
		.post{
			padding: 10px;
		}
			.tbl{
				margin:0 auto;
			}

				.tbl tr td{
					padding: 10px 5px;
				}

				.tbl tbody:hover{
					background: silver;
					color: darkslategray;
				}

				.tbl .head td{
					text-align: center;
					background: green;
					color: white;
				}

				.tbl .bottom td{
					text-align: center;
					padding-top: 10px;
				}

					.tbl .bottom td .btn1{
						padding: 5px;
						background: darkslategray;
						color: white;
						text-decoration: none;
						border-radius: 4px;
						border:1px solid darkslategray;
					}

					.tbl .bottom td .btn2{
						padding: 5px;
						background: red;
						color: white;
						text-decoration: none;
						border-radius: 4px;
						border:1px solid red;
					}

					.tbl .bottom td .btn3{
						padding: 5px;
						background: lightblue;
						color: dimgray;
						text-decoration: none;
						border-radius: 3px;
						border:1px solid lightblue;
						
					}
						.tbl .bottom td .btn1:hover{
							background: white;
							color: darkslategray;
							border:1px solid darkslategray;
						}

						.tbl .bottom td .btn2:hover{
							background: white;
							color: red;
							border:1px solid red;
						}

						.tbl .bottom td .btn3:hover{
							background: white;
							color: lightblue;
							border:1px solid lightblue;
						}

					.print{
						background: darkslategray;
						padding: 5px;
						border:1px solid white;
						color: white;
						text-decoration: none;
					}
						.print:hover{
							cursor: pointer;
							background: white;
							padding: 5px;
							border:1px solid darkslategray;
							color: darkslategray;
						}


			.frm{
				margin: 0 auto;
				width: 350px;
			}
				.frm .frm-tittle{
					border-bottom: 5px solid dimgray;
					text-align: center;
					padding: 5px 0;
					background: darkslategray;
					color: white;
					font-size: 18px;
				}

				.frm table{
					width: 100%;
				}
					.frm table tr td{
						padding: 5px 0;
					}

					.frm table .inp{
						width: 96%;
						padding: 5px 0 5px 5px;
					}

					.frm table .slct{
						width: 50%;
						padding: 5px 0;
					}

					.frm table .btn{
						background: darkslategray;
						padding: 5px;
						border:1px solid white;
						color: white;
					}
						.frm table .btn:hover{
							cursor: pointer;
							background: white;
							padding: 5px;
							border:1px solid darkslategray;
							color: darkslategray;
						}
			.frm-bayar .btn{
				background: darkslategray;
				padding: 5px;
				border:1px solid white;
				color: white;
			}
				.frm-bayar .btn:hover{
					cursor: pointer;
					background: white;
					padding: 5px;
					border:1px solid darkslategray;
					color: darkslategray;
				}

		.report .title-report{
			background: darkslategray;
			color: white;
			padding: 5px;
			border-bottom: 5px solid dimgray;
		}

			.report .inp{
				width: 100px;
			}
				.report .btn{
					background: darkslategray;
					padding: 5px;
					border:1px solid white;
					color: white;
					float: right;
				}
					.report .btn:hover{
						cursor: pointer;
						background: white;
						padding: 5px;
						border:1px solid darkslategray;
						color: darkslategray;
					}

</style>
<body>
	<header>
		<div class="logo" style="margin-left:30px;">Catatan<font color="white">Perjalanan Sederhana</font></div>
		<a class="log" href="index1.php">Logout</a>
		<div style="clear:both"></div>
	</header>
	
	<div class="body">
		<div class="body">
	
	<div class="side">
	<div class="side-tittle">
		MASTER
	</div>
	<div class="log-admin">
		Selamat Datang Di WEB PEDULI DIRI, <font color="white"></font>
	</div>
	<ul class="menu">
				<li><a href="index.php">Home Perjalanan</a></li>
				<li><a href="profil.php">profil</a></li>
	</ul>
	</div>
	<div class="content">
        <div class="tittle-content">
            
			<div class="tittle-content-post">
			Catatan perjalanan
		</div>
		<a class="add-btn" href="form_catatanperjalanan.php?hal=catatan_perjalanan&item=form"> + catatan_perjalanan</a>
		<div style="clear:both"></div>
	</div>
	<div class="post">

		<form class="frm" action="proses.php" method="POST">
		<table>
			<tr>
				<td colspan="2" class="frm-tittle">Catatan Perjalanan</td>
			</tr>
			<tr>
				<td style="padding-top:5px;">no</td>
				<td style="padding-top:5px;"><input class="slct" type="text" name="no" value="" required></td>
			</tr>
			<tr>
				<td style="padding-top:5px;">Id_Perjalanan</td>
				<td style="padding-top:5px;"><input class="slct" type="text" name="id_perjalanan" value="" required></td>
			</tr>
			<tr>
				<td style="padding-top:5px;">Id_Masuk</td>
				<td style="padding-top:5px;"><input class="slct" type="text" name="id_masuk" value="" required></td>
			</tr>
			<tr>
				<td style="padding-top:5px;">Tanggal</td>
				<td style="padding-top:5px;"><input class="slct" type="date" name="tanggal" value="" required></td>
			</tr>
			
			<tr>
				<td style="padding-top:5px;">waktu</td>
				<td style="padding-top:5px;"><input class="slct" type="time" name="waktu" value="" required></td>
			</tr>
			
			<tr>
				<td>Lokasi</td>
				<td>
				<select  class="slct" name="lokasi" required style="width:70%;">
					<option value="Pilih Lokasi">Pilih Lokasi</option>
					<option value="Bekasi Utara">Bekasi Utara</option>
					<option value="Babelan">Babelan</option>
					<option value="Bekasi Barat">Bekasi Barat</option>
					<option value="Tambelang">Tambelang</option>
					<option value="Harapan Indah">Harapan Indah</option>
				</select></td>
			</tr>
			<tr>
				<td>Suhu Tubuh</td>
				<td><input class="inp" type="text" name="suhu_tubuh"  required></td>
			</tr>
			<tr>
			<td><input type="submit"name="tambah"value="Tambah"></td>
			</tr>
			</table>
		</form>

		
			
	</div>
</div>