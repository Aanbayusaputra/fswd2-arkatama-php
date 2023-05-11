<?php
// Konfigurasi database
$hostname = 'localhost';
$username = 'root';
$password = 'localhost';
$database = 'pertemuan18';

// Membuat koneksi ke database
$conn = mysqli_connect($hostname, $username, $password, $database);

// Cek koneksi
if ($conn ->connect_error) {
    die('Koneksi database gagal: ' . $conn->connect_error());
// }else{
    echo "Koneksi berhasil";

 }