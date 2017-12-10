<?php
if (isset($_POST)) {
  if ($_POST['username']=='admin' && $_POST['password']=='admin') {
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header('location:admin.php');
  } else {
    echo "<script>alert('Username/Password Salah!')</script>";
    header('location:index.php');
  }
} else {
  echo "<script>alert('Kegagalan Sistem, coba lagi!')</script>";
  header('location:index.php');
}
?>
