<?php
session_start();

// hapus session
session_unset();
session_destroy();

// arahkan user ke halaman login
header('Location: login.php');
exit;
