<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:login.php");
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css">
</head>
<body class="body">
	<div class="navigasi">
	<div class="logo">
	<img src="image/logo.png">
	</div>
	<div class="menu">
	<ul>
		<li><a href="#home">Home</a></li>
		<li><a href="#news">News</a></li>
		<li><a href="#prod">Top Product</a></li>
		<li><a href="#cont">Contact Us</a></li>
		<li><div class="dropdown">
			<button class="dropbtn">Kategori dan Data</button>
			<div class="dropdown-content">
				<a href="laptop.html">Laptop</a>
				<a href="hardware.html">Hardware</a>
				<a href="proyektor.html">Proyektor</a>
				<a href="case.html">Casing & Tas</a>
				<a href="halamanberita.php">Berita</a>
				<a href="halamanbarang.php">Barang</a>
				<a href="halamanpembeli.php">Pembeli</a>
			</div>
		</div></li>
     	<li><a href="logout.php">Logout</a></li>
	</ul>
	</div>
	</div>
	<!--banner-->
	<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:login.php");
} 
?>
	<div class="banner" id="home">
		<img src="image/profil.png"><br><br><br>
		<h1>Hello, <?php echo $_SESSION['nama']; ?> <span></span></h1><br><br><br>
		<h3>good work today!</h3>
	</div>
	<!-- berita -->
	<div class="berita" id="news">
		<br><br>
		<br><br>
	<h1>Berita Seputar IT</h1>
	<div class="box-kiri">
		<p><h3>Peneliti MIT Rilis VisText untuk Autocaptioning pada Visualisasi Data</h3></p>
		<script type="text/javascript">
		document.writeln("Peneliti di Massachusetts Institu...");
		</script>
	</div>
	<div class="box-tengah">
		<p><h3>Peneliti Rilis Alat Deteksi Teks Illmiah Buatan AI dengan Akurasi 99 Persen</h3></p>
		<script type="text/javascript">
		document.writeln("Heather Desaire, seorang ahli...");
		</script>
	</div>
	<div class="box-kanan">
		<p><h3>VMware Luncurkan Solusi DEX Terintegrasi untuk Optimalkan Produktivitas Karyawan</h3></p>
		<script type="text/javascript">
		document.writeln("Teknologi pengalaman...");
		</script>
	</div>
	<a href=""><button>Tambah Berita</button></a>
	</div>

	<!-- top product -->
	<div class="product" id="prod">
		<br><br>
		<br><br>
	<h1>Our Top Product</h1>
	<div class="box-1-product">
		<img src="image/lepi1.jpeg.jpg">
		<p><h3>Laptop</h3></p>
	<div>
	<a href="laptop.html"><button>Selengkapnya</button></a>
	</div>
	</div>
	<div class="box-2-product">
		<img src="image/proyek.jpg">
		<p><h3>Proyektor</h3></p>
		<div>
	<a href="proyektor.html"><button>Selengkapnya</button></a>
	</div>
	</div>
	<div class="box-3-product">
		<img src="image/pro3.jpeg.jpg">
		<p><h3>Harddisk</h3></p>
		<div>
	<a href="hardware.html"><button>Selengkapnya</button></a>
	</div>
	</div>
	<div class="box-4-product">
		<img src="image/case4.jpeg">
		<p><h3>Case Laptop</h3></p>
	<div>
	<a href="case.html"><button>Selengkapnya</button></a>
	</div>
	</div>
</div>

	<!-- contact -->
	<div class="kontak">
		<h2>Contact Us</h2><br>
		<script type="text/javascript">
		document.writeln("Jl. Tulang Bawang Surakarta");
		document.writeln("<br>");
		document.writeln("Telp. 081234567890 (WhatsApp available)");
		</script><br><br>
		<h3>Social Media</h3>
		<a href="#"><img src="image/ig.png"></a>
		<a href="#"><img src="image/twt.png"></a>
		<a href="#"> <img src="image/wa.png">
	</div>

	<div class="footer" id="cont">
		&copy 2023 LAFS Computer
	</div>
</body>
</html>