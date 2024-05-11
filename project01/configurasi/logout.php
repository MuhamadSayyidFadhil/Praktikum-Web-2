<?php
// Mulai sesi
session_start();

// Unset semua variabel-session
$_SESSION = array();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login
header("location: ../landingpage/index.html");
exit;
?>
