<?php
      require_once '../controller/koneksi.php'; // Koneksi ke database

      /**
       * Cegah akses ke halaman login saat sedang login.
       */
      if(isset($_SESSION['is_login']) || isset($_COOKIE['_logged'])) {
        header('location: ../admin/dashboard.php');
      }

      if(isset($_POST['submit'])) {
        /**
         * Mendapatkan data dari formulir pendaftaran.
         * Data: Email, Kata Sandi, Nama Lengkap, dan NIM.
         */
        $nama     = $_POST['nama'];
        $email    = $_POST['email'];
        $password = $_POST['password'];

        if(empty($nama) || empty($email) || empty($password) ) {
          /**
           * Cek apakah formulir telah terisi data.
           */
          echo '<b>Warning!</b> Silahkan isi data yang diperlukan.';
        } elseif(count((array) $koneksi->query('SELECT email FROM `admin` WHERE email = "'.$email.'"')->fetch_array()) > 1) {
          /**
           * Cek jika email atau NIM telah terdaftar.
           */
          echo '<b>Warning!</b> Email telah terdaftar.';
        } else {
          /**
           * Memasukkan data ke database.
           */
          $query = "INSERT INTO `admin` (`nama`, `email`, `password`) VALUES ('$nama', '$email', '$password')";
          $insert = mysqli_query($koneksi, $query);
          if($insert) {
            echo 'Pendaftaran berhasil!';
            header('location: ../views/formlogin.php');
          } else {
            echo 'Pendaftaran gagal!';
          }
        }
      }
    ?>