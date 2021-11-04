<?php
session_start();
session_destroy();
unset($_SESSION['user']);
// Redirect to the login page:
header('Location: login.php');
?>
