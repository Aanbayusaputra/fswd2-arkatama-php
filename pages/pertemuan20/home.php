<?php
session_start();
if(!isset($_SESSION["username"])) {
    header("Location: login.php");
}
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
</head>
<body>
    <h1>Selamat datang <?php echo $username; ?>!</h1>
    <a href="logout.php">Logout</a>
</body>
</html>
