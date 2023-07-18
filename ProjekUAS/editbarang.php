<?php

// include database connection file
include("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update'])){
    $kode_barang= $_POST['kode_barang'];
    $nama= $_POST['nama'];
    $stok = $_POST['stok'];
    $harga= $_POST['harga'];
    $kategori= $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $masuk= $_POST['masuk'];
    $keluar= $_POST['keluar'];
   
    // update user data
    $result = mysqli_query($koneksi, "UPDATE barang SET nama='$nama', stok='$stok', harga='$harga', kategori='$kategori', deskripsi='$deskripsi', masuk='$masuk', keluar='$keluar' WHERE kode_barang=$kode_barang");

    // Redirect to homepage to display updated user in list
    header("Location: halamanbarang.php");
}
?>
<?php

$kode_barang = $_GET['kode_barang'];

// Fetch user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM barang WHERE kode_barang=$kode_barang");

while($user_data = mysqli_fetch_array($result)){   
    $kode_barang= $user_data['kode_barang'];
    $nama= $user_data['nama'];
    $stok= $user_data['stok'];
    $harga= $user_data['harga'];
    $kategori= $user_data['kategori'];
    $deskripsi= $user_data['deskripsi'];
    $masuk= $user_data['masuk'];
    $keluar= $user_data['keluar'];
}
?>

<html>
<head>
    <title>Update Data Barang</title>
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
            <li><a href="halamanberita.php">Home</a></li>
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
    <div class="tambah">
        <h2>Update Data Berita</h2>
        <form action="editbarang.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Kode Barang</label>
                <input type="text" name="kode_barang" placeholder="Masukkan Kode Barang" class="form-control" value=<?php echo $kode_barang;?>>
            </div><br>

            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama" placeholder="Masukkan Nama Barang" class="form-control" value=<?php echo $nama;?>>
            </div><br>

            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" placeholder="Masukkan Stok" class="form-control" value=<?php echo $stok;?>>
            </div><br>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" placeholder="Masukkan Harga" class="form-control" value=<?php echo $harga;?>>
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
                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi" rows="4" value=<?php echo $deskripsi;?>></textarea>
            </div><br>

            <div class="form-group">
                <label>Tanggal Masuk</label>
                <input type="date" name="masuk" value=<?php echo $masuk;?>>
            </div><br>

            <div class="form-group">
                <label>Tanggal Keluar</label>
                <input type="date" name="keluar" value=<?php echo $keluar;?>>
            </div><br>

            <button type="Submit" name="update" class="btn btn-primary">Submit</button>
            <a href="halamanbarang.php" class="btn btn-danger btn-icon-split">
                <span class="text">Cancel</span></a>  
        </form>
    </div>
</body>
</html>       