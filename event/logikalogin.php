<?php 
session_start();
include ('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

// Melakukan sanitasi input untuk mencegah SQL injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);
$cek = mysqli_num_rows($result);

if ($cek > 0) {
    $data = mysqli_fetch_array($result);
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];
    // Redirect ke halaman admin
    header("Location: admin.php");
} else {
    // Redirect ke halaman login dengan pesan error
    $_SESSION['error'] = "Username atau Password salah";
    header("Location: login.php");
}
exit();
?>
