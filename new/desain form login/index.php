<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form login</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container">
      <input type="checkbox" id="check" />
      <div class="login form">
        <header>Form Login</header>
        <form action="#" method="post">
          <input type="text" placeholder="masukan email" />
          <input type="password" placeholder="masukan password" />
          <a href="#">Lupa password</a>
          <input class="button" type="submit" value="login" />
        </form>
        <div class="sigup">
          <span class="sigup"
            >Belum punya akun?
            <label for="check">daftar</label>
          </span>
        </div>
      </div>
      <div class="form registrasi">
        <header>Form registrasi</header>
        <form action="#" method="post">
          <input type="text" placeholder="username" name="username" id="username" />
          <input type="password" placeholder="masukan password" name="password" id="password" />
          <input type="password" placeholder="masukan ulang password" name="password" id="password" />
          <input class="button" type="submit" name="registrasi" />
        </form>
        <div class="sigup">
          <span class="sigup"
            >sudah punya akun?
            <label for="check">login</label>
          </span>
        </div>
      </div>
    </div>
  </body>
</html>
