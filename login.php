<?php
$username =strtolower(trim($_POST['user']));
$password = $_POST['password'];

if ($username == 'herkane') {
    if ($password == 'achraf') {
        include 'dashboard.php';
    } else {
        include 'signin.php';
    }
} else {
    include 'signin.php';
}
?>
