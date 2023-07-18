<?php

// include database connection file
include("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update'])){
    $id_berita= $_POST['id_berita'];
    $judul= $_POST['judul'];
    $berita = $_POST['berita'];
    $tanggal= $_POST['tanggal'];
   
    // update user data
    $result = mysqli_query($koneksi, "UPDATE berita SET judul='$judul',berita='$berita',tanggal='$tanggal' WHERE id_berita=$id_berita");

    // Redirect to homepage to display updated user in list
    header("Location: halamanberita.php");
}
?>
<?php

$id_berita = $_GET['id_berita'];

// Fetch user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita=$id_berita");

while($user_data = mysqli_fetch_array($result)){   
    $judul= $user_data['judul'];
    $berita= $user_data['berita'];
    $tanggal= $user_data['tanggal'];
}
?>

<html>
<head>
    <title>Update Data Berita</title>
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
        <form action="editberita.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Judul Berita</label>
                <input type="text" name="judul" placeholder="Masukkan Judul" class="form-control" value=<?php echo $judul;?>>
            </div><br>

            <div class="form-group">
                <label>Isi Berita</label>
                <input type="text" name="berita" placeholder="Masukkan Berita" class="form-control" value=<?php echo $berita;?>>
            </div><br>

                <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <input type="date" name="tanggal" value=<?php echo $tanggal;?>>
                </div><br>

                <td><input type="hidden" name="id_berita" value=<?php echo $_GET['id_berita'];?>></td>
                <button type="Submit" name="update" class="btn btn-primary">Submit</button>
                <a href="halamanberita.php" class="btn btn-danger btn-icon-split">
                    <span class="text">Cancel</span>
                </a>  
        </form>
    </div>
</body>
</html>       