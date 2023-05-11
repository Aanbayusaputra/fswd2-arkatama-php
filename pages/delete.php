<?php
// Include file koneksi ke database
include("user.php");

// Cek apakah user ID sudah di-set sebagai parameter di URL
if(isset($_GET['id'])){
    // Mendapatkan user ID dari URL
    $id = $_GET['id'];

    // Menghapus data user dari database berdasarkan user ID
    $result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

    // Redirect ke halaman tabel users setelah data berhasil dihapus
    header("Location: user.php");
}
?>
