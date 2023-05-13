<?php
	//menghubungkan ke database
	include 'koneksi.php';

	//mengambil data dari form
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$role = $_POST['role'];

	//mengambil data file avatar
	$nama_file = $_FILES['avatar']['name'];
	$ukuran_file = $_FILES['avatar']['size'];
	$tipe_file = $_FILES['avatar']['type'];
	$tmp_file = $_FILES['avatar']['tmp_name'];

	//set path file upload
	$path = "avatar/".$nama_file;

	//simpan data ke database
	$query = "INSERT INTO users (name, email, phone, role, avatar) VALUES ('$name', '$email', '$phone', '$role', '$nama_file')";
	$result = mysqli_query($conn, $query);

	//simpan file avatar ke server
	move_uploaded_file($tmp_file, $path);

	//redirect ke halaman index.php
	header("location: user.php");

	//menutup koneksi database
	mysqli_close($conn);
?>
