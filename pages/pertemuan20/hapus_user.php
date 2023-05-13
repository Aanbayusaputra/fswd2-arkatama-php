<?php
	//menghubungkan ke database
	include 'koneksi.php';

	//mengambil data id user dari parameter url
	$id = $_GET['id'];

	//query untuk menghapus data user
	$query = "DELETE FROM users WHERE id='$id'";

	//eksekusi query
	$result = mysqli_query($conn, $query);

	//cek apakah query berhasil dieksekusi
	if($result){
		//redirect ke halaman index.php dengan pesan sukses
		header('location:user.php?status=sukses_delete');
	}else{
		//redirect ke halaman index.php dengan pesan gagal
		header('location:user.php?status=gagal_delete');
	}

	//menutup koneksi database
	mysqli_close($conn);
