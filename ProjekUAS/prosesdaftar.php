<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $nama= $_POST['nama'];
    $username = $_POST['username'];
    $password= $_POST['password'];

    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($koneksi, "INSERT INTO users(nama, username, password) VALUES('$nama','$username','$password')");
    header("location:login.php");
}
?>