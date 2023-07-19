<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "esans";
$koneksi = mysqli_connect($db_host,$db_user,$db_pass,$db_name); 

try {
    //Create PDO Connection
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
   // echo "berhasil";
} catch (PDOException $e) {
    //show error
    die("Terjadi Masalah: " . $e->getMessage());
}