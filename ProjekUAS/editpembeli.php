<?php

// include database connection file
include("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update'])){
    $id_pembeli= $_POST['id_pembeli'];
    $nama= $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email= $_POST['email'];
    $no= $_POST['no'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $tanggal= $_POST['tanggal'];
   
    // update user data
    $result = mysqli_query($koneksi, "UPDATE pembeli SET nama='$nama', alamat='$alamat', email='$email', no='$no', kategori='$kategori', jumlah='$jumlah', tanggal='$tanggal' WHERE id_pembeli=$id_pembeli");

    // Redirect to homepage to display updated user in list
    header("Location: halamanpembeli.php");
}
?>
<?php

$id_pembeli = $_GET['id_pembeli'];

// Fetch user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM pembeli WHERE id_pembeli=$id_pembeli");

while($user_data = mysqli_fetch_array($result)){   
    $id_pembeli= $user_data['id_pembeli'];
    $nama= $user_data['nama'];
    $alamat= $user_data['alamat'];
    $email= $user_data['email'];
    $no= $user_data['no'];
    $kategori= $user_data['kategori'];
    $jumlah= $user_data['jumlah'];
    $tanggal= $user_data['tanggal'];
}
?>

<html>
<head>
    <title>Update Data Pembeli</title>
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
        <h2>Update Data Pembeli</h2>
        <form action="editpembeli.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Pembeli</label>
                <input type="text" name="nama" placeholder="Masukkan Nama Pembeli" class="form-control" value=<?php echo $nama;?>>
            </div><br>

            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" rows="4" value=<?php echo $alamat;?>></textarea>
            </div><br>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Masukkan Email" class="form-control" value=<?php echo $email;?>>
            </div><br>

            <div class="form-group">
                <label>No Hp</label>
                <input type="text" name="no" placeholder="Masukkan No Hp" class="form-control" value=<?php echo $no;?>>
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
                <input type="text" name="jumlah" placeholder="Masukkan Jumlah" class="form-control" value=<?php echo $no;?>>
            </div><br>

            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="keluar" value=<?php echo $tanggal;?>>
            </div><br>
            
            <td><input type="hidden" name="id_pembeli" value=<?php echo $_GET['id_pembeli'];?>></td>
            <button type="Submit" name="update" class="btn btn-primary">Submit</button>
            <a href="halamanpembeli.php" class="btn btn-danger btn-icon-split">
                <span class="text">Cancel</span></a>  
        </form>
    </div>
</body>
</html>       