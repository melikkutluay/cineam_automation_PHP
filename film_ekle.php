<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php include 'film_ekle_veri.php'; ?>
    <title></title>
  </head>
  <body><br>
    <div class="col-md-4"></div>
    <div class="col-md-4" >
      <form class="add_movie" role="form"  action="<?php $_SERVER['PHP_SELF'];?> " method="get">
        <div class="navbar navbar-form">
          <div class="navbar navbar-default" style="width:350px; margin-left:70px; padding-bottom:10px;">
            <div class="container-fluid">
              <div class="row" style="margin-left:10px;">
                <h4>FİLM BİLGİLERİ</h4>
                <input type="text" name="film_link" value="" style="width:300px; border-radius:1px  ;" placeholder="filmin resminin linkini adresini kopyalayınız"><br><br>
                <input type="text" name="film_adi" value="" style="width:300px; border-radius:1px;" placeholder="filmin adını giriniz"><br><br>
                <input type="time" name="film_suresi" value="" style="width:300px; border-radius:1px;" placeholder="film süresi giriniz"><br><br>
                <input type="number" name="film_fiyati" value="" style="width:300px; border-radius:1px;" placeholder="film fiyatını belirtiniz"><br><br>
                <select class="" name="para_tipi" style="width:300px; border-radius:1px;">
                  <option value="TR">Türk lirası(TRY)</option>
                </select><br><br>
              </div>
            </div>
          </div>
          <div id="create" style="margin-left:200px;">
            <button class="btn btn_default" onClick="createDiv()">Film Ekle !</button>
          </div>
        </div>
        </form>
      </div>
    <div class="col-md-4"></div>
  </body>
</html>
