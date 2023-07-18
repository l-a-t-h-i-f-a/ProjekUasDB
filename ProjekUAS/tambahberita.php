<html>
<head>
    <title>Tambah Data Berita</title>
    <link rel="stylesheet" href="css/style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="body">
<div class="navigasi">
<div class="logo">
	<img src="image/logo.png">
	</div>
	<div class="menu">
	<ul>
    <li><a href="halamanadmin.php">Home</a></li>
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

<br/><br/>
<div class="tambah"><br><br><br><br>
    <h2>Tambah Data Berita</h2>
    <form action="tambahberita.php" method="POST">
    <center><a href="halamanberita.php">Halaman Berita</a></center><br><br>
        <div class="form-group">
            <label>Judul Berita</label>
            <input type="text" name="judul" placeholder="Masukkan Judul" class="form-control" required>
        </div><br>

        <div class="form-group">
            <label>Isi Berita</label>
            <textarea class="form-control" name="berita" rows="3" required></textarea>
        </div><br>

        <div class="form-group">
            <label>Tanggal Berita</label>
            <input type="date" name="tanggal" required>
        </div><br><br>
        <div>
            <button type="Submit" name="Submit" class="btn btn-primary">Submit</button>
            <a href="halamanberita.php" class="btn btn-danger btn-icon-split">
            <span class="text">Cancel</span></a>
        </div>
    </form>
</div>

<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $judul= $_POST['judul'];
    $berita= $_POST['berita'];
    $tanggal = $_POST['tanggal'];

    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($koneksi, "INSERT INTO berita(judul,berita,tanggal) VALUES('$judul','$berita','$tanggal')");

    // Show message when user added
    echo "<center>User added successfully. <a href='halamanberita.php'>View Data Berita</a></center>";
}
?>
</body>
</html>