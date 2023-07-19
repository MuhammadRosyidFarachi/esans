<?php
require_once '../controller/koneksi.php'; // Koneksi ke database.
if(isset($_SESSION['is_login']) || isset($_COOKIE['_logged'])) {
  /**
   * Menghapus sesi atau cookie yang aktif.
   */
  if(session_destroy()) {
    setcookie('_logged', null, -(60 * 60 * 24), '/');
    header('location: ../views/formlogin.php');
    exit;
  }
} else {
  header('location: ../views/formlogin.php');
}
?>