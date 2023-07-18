
<?php

include_once("config.php");


$result = mysqli_query($koneksi, "SELECT * FROM  barang INNER JOIN kategori ON kategori.id=barang.kategori");

?>

<html>
<head>
    <title>Tambah Data Barang</title>
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

<br><br><br><br><br><br>

<center><h2>Data Barang</h2></center><br>
<center><a href="tambahbarang.php" class="btn btn-primary btn-icon-split">
    <span class="text">Tambah Data</span>
</a></center><br><br>
 <!-- DataTales Example -->
 <div class ="container text-center">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">

    <tr>
        <th><center>Kode Barang</center></th>
        <th><center>Nama Barang</center></th> 
        <th><center>Stok</center></th> 
        <th><center>Harga</center></th> 
        <th><center>Kategori</center></th> 
        <th><center>Deskripsi</center></th> 
        <th><center>Tanggal Masuk</center></th> 
        <th><center>Tanggal Keluar</center></th> 
        <th><center>Aksi</center></th>
    </tr>
    <?php
    $i=1;
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['kode_barang']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['stok']."</td>";
        echo "<td>".$user_data['harga']."</td>";
        echo "<td>".$user_data['kategori']."</td>";
        echo "<td>".$user_data['deskripsi']."</td>";
        echo "<td>".date('d/m/Y',strtotime($user_data['masuk']))."</td>";
        echo "<td>".date('d/m/Y',strtotime($user_data['keluar']))."</td>";
        echo "<td><a href='editbarang.php?kode_barang=$user_data[kode_barang]' class='btn btn-warning'>Edit</a> 
        | <a href='deletebarang.php?kode_barang=$user_data[kode_barang]' class='btn btn-danger'>Delete</a></td></tr>";
   
    }
    ?>
</table>
</div>
</div>
</body>

</html>
