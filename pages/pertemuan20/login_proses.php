<!-- <?php
        // session_start();

        // // cek apakah pengguna sudah login
        // if (isset($_SESSION['email'])) {
        //     header("Location:sukses.php");
        // }

        // $message = '';
        // // cek apakah form login sudah disubmit
        // if (isset($_POST['submit'])) {
        //     $email = $_POST['email'];
        //     $password = $_POST['password'];

        //     // cek apakah email dan password sesuai
        //     if ($email == 'email' && $password == 'password') {
        //         // simpan email pengguna ke session
        //         $_SESSION['email'] = $email;
        //         header("Location:sukses.php");
        //     } else {
        //         $message = 'Email atau password salah';
        //     }
        //     // tambahkan alert untuk menampilkan informasi login sukses
        //     echo '<div class="alert alert-success" role="alert">Login berhasil!</div>';
        //     header("location: sukses.php");
        //     exit;
        // }
        ?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .login-container {
            background-color: #fff;
            margin: 50px auto;
            padding: 20px;
            width: 300px;
            box-shadow: 0px 0px 10px #888888;
        }

        .login-container h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        .login-container form input[type="email"],
        .login-container form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .login-container form input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        .login-container .message {
            color: red;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Login</h1>
        <form method="post">
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <input type="submit" name="submit" value="Login">
        </form>
        <div class="message"><?php echo $message; ?></div>
    </div>
</body>

</html> -->