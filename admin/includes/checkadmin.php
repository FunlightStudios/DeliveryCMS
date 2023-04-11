<?php
session_start();
if(!isset($_SESSION['admin_id'])) {
  header("Location: ../index.php");
  exit();
}
$conn = mysqli_connect($servername, $username, $password, $dbname);
$admin_id = $_SESSION['admin_id'];
$sql = "SELECT username FROM admins WHERE id = $admin_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
if(mysqli_num_rows($result) != 1) {
  header("Location: ../index.php");
  exit();
}
$current_language = $_SESSION['language'] ?? 'de'; // standardmäßig Deutsch
?>