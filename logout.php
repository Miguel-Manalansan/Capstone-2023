<?php
session_start();

session_destroy();

setcookie(session_name(), '', time() - 3600, '/');

header('Location: https://cgi.luddy.indiana.edu/~team09/home.php');
exit;
?>