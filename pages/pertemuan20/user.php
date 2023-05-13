<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Table Users</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
	<h1>Daftar User</h1>
	<div class="container  mt-5 ">
		<a href="add.php" class="btn btn-primary btn-md">Add</a>
		<table class="table table-striped table-hover ">
			<thead class="table-dark">
				<tr>
					<th>Aksi</th>
					<th>Avatar</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Role</th>

				</tr>
			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM users";
				$result = mysqli_query($conn, $sql);

				// Looping untuk menampilkan data user ke dalam tabel
				while ($row = mysqli_fetch_assoc($result)) {

					echo "<tr>";
					echo "<td>";
					echo "<a href='detail_user.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Detail</a>";
					echo " | ";
					echo "<a href='edit_user.php?id=" . $row['id'] . "' class='btn btn-info btn-sm' >Edit</a>";
					echo " | ";
					echo "<a href='hapus_user.php?id=" . $row['id'] . "'class='btn btn-danger btn-sm'  onclick='return confirm(\"Apakah Anda yakin ingin menghapus user ini?\")'>Hapus</a>";
					echo "</td>";
					echo "<td><img src='" . $row['avatar'] . "' width='50'></td>";
					echo "<td>" . $row['name'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					echo "<td>" . $row['phone'] . "</td>";
					echo "<td>" . $row['role'] . "</td>";
					echo "</tr>";
				}


				// Tutup koneksi ke database
				mysqli_close($conn);
				?>
			</tbody>
		</table>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	</div>
</body>

</html>