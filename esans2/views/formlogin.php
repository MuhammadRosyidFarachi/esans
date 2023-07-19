
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login E-SANS</title>
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
          <form action="../login/login.php" method="post">
          <div class="auth-content">
            <div class="email d-flex flex-column mb-4">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" required />
            </div>
            <div class="password d-flex flex-column required">
              <label for="password">Password</label>
              <input type="password" maxlength="20" name="password" id="password" required />
            </div>
            <div class="d-flex flex-column button-auth text-center mt-5">
                <input class="button-submit" type="submit" name="submit" value="submit" style="background-color: #850000; color: aliceblue;">
            </form> 
              <a href="#" class="fw-bold mt-4" style="background: none !important; color: black; text-decoration: none">Lupa Password ?</a>
            </div>
            <hr />
          </div>
          <div class="auth-footer">
            <div class="button-footer d-flex flex-column">
              <a href="" class="btn btn-sm"><img src="img/lg-google.png" width="20" /> Google Account</a>
              <a href="" class="btn btn-sm"><img src="img/lg-telp.png" width="20" /> Nomor Handphone</a>
            </div>
            <p class="text-center mt-4">Belum punya akun ? <a href="formregister.php" class="fw-bold text-dark" style="text-decoration: none">Daftar</a></p>
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
