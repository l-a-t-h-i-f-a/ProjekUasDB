<html>
<head>
    <title>Tambah Data Pembeli</title>
    <link rel="stylesheet" href="css/style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
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
    <h2>Tambah Data Pembeli</h2>
    <form action="tambahpembeli.php" method="POST">
    <center><a href="halamanpembeli.php">Halaman Pembeli</a></center><br><br>
        <div class="form-group">
            <label>Nama Pembeli</label>
            <input type="text" name="nama" placeholder="Masukkan Nama Pembeli" class="form-control" required>
        </div><br>

        <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" rows="3" required></textarea>
        </div><br>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan Email" class="form-control" required>
        </div><br>

        <div class="form-group">
            <label>No Hp</label>
            <input type="text" name="no" placeholder="Masukkan Nomor" class="form-control" required>
        </div><br>

        <?php 
        include_once("config.php");
        $sql = mysqli_query($koneksi, "SELECT * FROM  kategori ORDER BY id ASC");
        ?>
        <div class="mb-3">
            <label class="form-label">Pilih Kategori</label>
            <select class="form-select" name="kategori">
                <?php
                    // use a while loop to fetch data
                    // from the $all_categories variable
                    // and individually display as an option
                    while ($category = mysqli_fetch_array(
                            $sql,MYSQLI_ASSOC)):;
                ?>
                    <option value="<?php echo $category["id"];
                        // The value we usually set is the primary key
                    ?>">
                        <?php echo $category["kategori"];
                            // To show the category name to the user
                        ?>
                    </option>
                <?php
                    endwhile;
                    // While loop must be terminated
                ?>
            </select>
        </div>

        <div class="form-group">
            <label>Jumlah</label>
            <input type="text" name="jumlah" placeholder="Masukkan Jumlah" class="form-control" required>
        </div><br>

        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" required>
        </div><br><br>

        <div>
        <button type="Submit" name="Submit" class="btn btn-primary">Submit</button>
        <a href="halamanpembeli.php" class="btn btn-danger btn-icon-split">
            <span class="text">Cancel</span>
        </a>
        </div>
        
    </form>
</div>

<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $nama= $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email= $_POST['email'];
    $no = $_POST['no'];
    $kategori = $_POST['kategori'];
    $jumlah= $_POST['jumlah'];
    $tanggal= $_POST['tanggal'];

    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($koneksi, "INSERT INTO pembeli(nama,alamat,email,no,kategori,jumlah,tanggal) VALUES('$nama','$alamat','$email','$no','$kategori','$jumlah','$tanggal')");

    // Show message when user added
    echo "<center>User added successfully. <a href='halamanpembeli.php'>View Data Pembeli</a></center>";
}
?>
</body>
</html>