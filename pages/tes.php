<?php
kategori(13,'Kategori_13');

function kategori($id, $name)
{


include 'database.php';
$sql = "INSERT INTO categories (id, name)
 VALUES ($id, $name)";


// Cek koneksi
if (!$conn) {
    die('gagal: ' . mysqli_connect_error());
}else{
    // echo "Koneksi berhasil";
}
echo "berhasil";
}
?>