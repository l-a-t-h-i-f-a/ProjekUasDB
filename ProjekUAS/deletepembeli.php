<?php
// include database connection file
include_once("config.php");


$id_pembeli = $_GET['id_pembeli'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM pembeli WHERE id_pembeli=$id_pembeli");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:halamanpembeli.php");
?>