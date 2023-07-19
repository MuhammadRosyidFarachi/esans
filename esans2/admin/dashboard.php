
<?php include('../controller/koneksi.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="d-flex flex-row">
        <!-- Sidebar -->
            <aside class="d-flex flex-column sidebar p-4" style="background: #850000; height: 100vh; width: 15%;">
                <div class="sidebar-header">
                    <img class="justify-content-center" src="../img/logo.png" alt="Logo" width="175" style="margin-top: -25px;">
                </div>
                <div class="sidebar-body mt-5 pt-5">
                    <ul class="navbar-nav text-light gap-3 justify-content-center">
                        <li class="nav-item">
                            <a href="" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Kelola Meja</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Pesanan</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Riwayat</a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-footer mt-auto text-light">
                    <a href="../login/logout.php" class="nav-link">Logout</a>
                </div>
            </aside>
        <!-- End -->
        <!-- Content -->
        <div class="container mt-3 me-3">
        <table class="table col">
  <thead>
    <a href="../views/tambahproduk.php" class="btn btn-success">Tambah</a>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Gambar</th>
      <th scope="col">action</th>
    </tr>
  </thead>

  <tbody class="table-group-divider">
  <?php

      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM produk ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td>Rp <?php echo $row['harga']; ?></td>
          <td style="text-align: center;"><img src="../img/<?php echo $row['gambar_produk']; ?>" style="width: 120px;"></td>
          <td>
              <a class="btn btn-warning" href="../views/editproduk.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a class="btn btn-danger" href="../controller/delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 
      }
      ?>
  </tbody>
</table>
</div>
        <!-- End -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>