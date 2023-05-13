<?php
$conn = mysqli_connect("localhost", "root", "localhost", "pertemuan18");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
}
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $role = $_POST["role"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $id = $_POST["id"];
    $query = "UPDATE users SET email='$email', name='$name', role='$role', phone='$phone', address='$address', password='$password' WHERE id='$id'";
    mysqli_query($conn, $query);
    header("Location: sukses.php");
    // Mengupload gambar
    if ($_FILES['image']['name'] != "") {
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

        $extensions = array("jpeg", "jpg", "png");
        $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

        if (in_array($file_ext, $extensions) === false) {
            echo "File yang diizinkan hanya dengan format JPEG, JPG, atau PNG.";
        } elseif ($file_size > 2097152) {
            echo 'Ukuran file tidak boleh lebih dari 2 MB';
        } else {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            $query = "UPDATE users SET email='$email', name='$name', role='$role', phone='$phone', address='$address', password='$password', image='$file_name' WHERE id='$id'";
            mysqli_query($conn, $query);
            header("Location: sukses.php");
        }
    } else {
        $query = "UPDATE users SET email='$email', name='$name', role='$role', phone='$phone', address='$address', password='$password' WHERE id='$id'";
        mysqli_query($conn, $query);
        header("Location: sukses.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center"> Edit Pengguna</h1>
        <form class="row g-3" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <div class="col-12">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" value="<?php echo $data['name'] ?>">
            </div>
            <div class="col-md-6">
                <label for="role" class="form-label">Role</label>
                <select id="role" class="form-select" name="role" id="role">
                    <option <?php if ($data['role'] == 'admin') {
                                echo 'selected';
                            } ?>>admin</option>
                    <option <?php if ($data['role'] == 'staff') {
                                echo 'selected';
                            } ?>>staff</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" id="inputPassword4" name="password" placeholder="Masukkan password" id="password" value="<?php echo $data['password'] ?>">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="inputCity" name="email" placeholder="Masukkan email" id="password" value="<?php echo $data['email'] ?>">
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="inputCity" name="phone" placeholder="Masukkan No Telpon" id="phone">
            </div>
            <div class="col-12">
                <label for="address" class="form-label">Alamat</label>
                <textarea class="form-control" id="address" rows="3" name="address" placeholder="Alamat Lengkap" id="address"></textarea>
            </div>

            <div class="col-md-6">
                <label for="phone" class="form-label">Image</label>
                <input type="file" class="form-control" id="inputImage" name="image" placeholder="" id="File">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="submit" id="submit">Edit pengguna</button>
            </div>
            <a href="sukses.php" class="btn btn-secondary">Kembali ke daftar pengguna</a>
        </form>
    </div>


</body>

</html>