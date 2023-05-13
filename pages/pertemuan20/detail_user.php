

<?php
	//menghubungkan ke database
	include 'koneksi.php';

	//mengambil data id user dari parameter url
	$id = $_GET['id'];

	//query untuk mengambil data user
	$query = "SELECT * FROM users WHERE id='$id'";

	//eksekusi query
	$result = mysqli_query($conn, $query);

	//ambil data user
	$row = mysqli_fetch_array($result);

	//menampilkan data user
	echo "<h1>Detail User</h1>";
	echo "<table>";
	echo "<tr><td>Nama</td><td>:</td><td>".$row['name']."</td></tr>";
	echo "<tr><td>Email</td><td>:</td><td>".$row['email']."</td></tr>";
	echo "<tr><td>Phone</td><td>:</td><td>".$row['phone']."</td></tr>";
	echo "<tr><td>Role</td><td>:</td><td>".$row['role']."</td></tr>";
	echo "<tr><td>Avatar</td><td>:</td><td><img src='avatar/".$row['avatar']."' width='100'></td></tr>";
	echo "</table>";
	echo "<a href='user.php'>Kembali</a>";

	//menutup koneksi database
	mysqli_close($conn);
?>
