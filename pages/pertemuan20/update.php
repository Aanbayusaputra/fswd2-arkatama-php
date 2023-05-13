<?php
	//menghubungkan ke database
	include 'koneksi.php';

	//mengambil data dari form
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$role = $_POST['role'];
	$avatar = $_FILES['avatar']['name'];
	$tmp = $_FILES['avatar']['tmp_name'];

	//cek apakah ada file avatar yang diupload
	if(!empty($avatar)){
		//pindahkan file avatar ke folder avatar di server
		move_uploaded_file($tmp, 'avatar/'.$avatar);

		//query untuk mengupdate data user beserta avatar-nya
		$query = "UPDATE users SET name='$name', email='$email', phone='$phone', role='$role', avatar='$avatar' WHERE id='$id'";
	}else{
		//query untuk mengupdate data user tanpa avatar-nya
		$query = "UPDATE users SET name='$name', email='$email', phone='$phone', role='$role' WHERE id='$id'";
	}

	//eksekusi query
	$result = mysqli_query($conn, $query);

	//cek apakah query berhasil dieksekusi
	if($result){
		//redirect ke halaman index.php dengan pesan sukses
		header('location:user.php?status=sukses_update');
	}else{
		//redirect ke halaman index.php dengan pesan gagal
		header('location:user.php?status=gagal_update');
	}

	//menutup
	//menutup koneksi database
	mysqli_close($conn);
?>
