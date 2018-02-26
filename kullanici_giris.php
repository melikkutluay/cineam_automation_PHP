<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/kullanici_giris.css">
    <link rel="stylesheet" href="bootstrap/css/cover.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <?php include 'kullanici_giris_veri.php'; ?>
      <//?php include 'login_bakmak_icin.php'; ?>
  </head>
  <body>

    <div class="container">
      <form class="form-signin" role="form" action="<?php $_SERVER['PHP_SELF'];?> " method="post">
        <h2 class="form-signin-heading">Giriş Yap</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required="" autofocus=""><br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="parola" id="parola" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="login_user" type="submit">Giriş</button>
      </form>

    </div>
    <a href="kayit_ol.php">Üye Değilseniz Hemen Kaydolun</a>

</body>
</html>
