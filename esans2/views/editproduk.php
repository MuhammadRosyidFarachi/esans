
<?php

include("../controller/koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: dashboard.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM produk WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$produk = mysqli_fetch_assoc($query);


// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="../controller/edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $produk['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $produk['nama'] ?>" />
        </p>
        <p>
            <label for="nama">Harga: </label>
            <input type="text" name="harga" placeholder="nama lengkap" value="<?php echo $produk['harga'] ?>" />
        </p>
        <p>
            <label for="gambar_produk">Gambar Produk: </label>
            <input type="file" id="gambar_produk" name="gambar_produk" value="<?php echo $produk['$gambar_produk']?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>