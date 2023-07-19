
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register E-SANS</title>
    <!-- CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <!-- JS File -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="d-flex flex-row">
      <div class="img"></div>
      <div class="container">
        <div class="d-flex flex-column align-items-center content">
          <div class="text-header mb-4 pb-4">
            <h1 class="text-center">E-SANS</h1>
            <p>Lakukan lelang mudah hanya di E-SANS</p>
          </div>
          <form action="../login/register.php" method="post">
          <div class="auth-content">
            <div class="email d-flex flex-column mb-2">
              <label for="email">Masukkan Nama</label>
              <input type="text" name="nama" id="nama" required />
            </div>
            <div class="email d-flex flex-column mb-2">
              <label for="email">Masukkan Email</label>
              <input type="text" name="email" id="email" required />
            </div>
            <div class="password d-flex flex-column mb-2">
              <label for="password">Buat Password</label>
              <input type="password" name="password" id="password" required />
            </div>
            <!-- <div class="password d-flex flex-column mb-2">
                <label for="password">Masukkan No HP Aktif</label>
                <input type="number" maxlength="13" name="noHp" id="noHp" required />
              </div> -->
              <div class="d-flex flex-column button-auth text-center mt-3">
                <input class="button-submit" name="submit" type="submit" value="submit" style="background-color: #850000  ; color: aliceblue;">
              </form> 
            </div>
            <hr />
          </div>
          <div class="auth-footer">
            <div class="button-footer d-flex flex-column  text-center">
            <form method="post" action="formlogin.php">
        <input type="submit" name="submit" value="Kembali Ke Halaman Login" style="background-color: #850000  ; color: aliceblue; width:25em;">
    </form>
             
                <p class="text-center mt-4 mb-1">Daftar Cepat Menggunakan</p>
                <div style="text-align: center;">
              <a href="" class="btn btn-sm">
                <img src="img/lg-google.png" width="20"/> Google Account</a>
              <a href="" class="justify-content-center btn btn-sm">
                <img src="img/lg-telp.png" width="20" /> Nomor Handphone</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<style>
  input {
    border-radius: 20px;
  }
  .img {
    background-image: url('../img/bg1.jpeg');
    background-size: cover;
    height: 100vh;
    width: 120em;
  }
  .content {
    margin-top: 2em;
  }

  .button-submit {
    color: white;
    background-color: #850000;

    width: 25em;
    border-radius: 20px;
  }
  .button-footer a {
    border: 1px solid black;
    border-radius: 20px;

    margin: 10px 0px;
    width: 25em;
  }
  @media (max-width: 720px) {
    .img {
      display: none !important;
    }
  }
</style>
