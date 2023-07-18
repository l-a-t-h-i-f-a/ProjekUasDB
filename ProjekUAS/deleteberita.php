<?php
// include database connection file
include_once("config.php");


$id_berita = $_GET['id_berita'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM berita WHERE id_berita=$id_berita");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:halamanberita.php");
?>