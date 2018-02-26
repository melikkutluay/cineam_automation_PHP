<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php include 'vizyon_veri.php'; ?>
    <script type="text/javascript" src="saat.js"></script>
    <title></title>
  </head>
  <body>
    <div class="col-md-4">
      <h4>Film id'leri</h4>
      <div class="navbar navbar-default" style="width:150px;">
        <?php
          require_once('veri_tabani.php');
          $sql_id = "SELECT * FROM filmler";
          $result = $conn->query($sql_id);
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
               $bagli_id="". $row["film_id"]. "";
               $bagli_adi="". $row["film_adi"]. "";
                echo $bagli_id." ".$bagli_adi.'</p>' ;
              }
          }
         ?>
      </div>
    </div>
    <div class="col-md-4" style="margin-top:80px;">
      <h3>Vizyona girecek film bilgilerini giriniz.</h3><br>
      <form class="" action="<?php $_SERVER['PHP_SELF'];?> " method="get">
          <div class="navbar navbar-default" style="width:370px; margin-left:60px;">
            <div class="container-fluid">
              <div class="row" >
                <div class="salonlar">
                  <h4 style="margin-left:130px;">SALONLAR</h4>
                  <input type="number" name="salon_numarasi" value="" style="width:300px; border-radius:1px; margin-left:35px;" placeholder="1'den 6'ya kadar bir sayi giriniz">
                </div>
                <div class="film_no">
                  <h4 style="margin-left:110px;">FİLM NUMARASI</h4>
                  <input type="number" name="film_numarasi" style="width:300px; border-radius:1px; margin-left:35px;" placeholder="Film numarası girini" value="">
                </div>
                <div class="seanslar" name="seans" style="margin-left:6px;">
                       <h4 style="margin-left:130px;">SEANSLAR</h4>
                    <input type="checkbox" name="seans[]"
                       value="09:00">09:00</input>
                    <input type="checkbox" name="seans[]"
                       value="10:00">10:00</input>
                    <input type="checkbox" name="seans[]"
                      value="11:00">11:00</input>
                    <input type="checkbox" name="seans[]"
                      value="12:00">12:00</input>
                    <input type="checkbox" name="seans[]"
                      value="13:00">13:00</input>
                    <input type="checkbox" name="seans[]"
                      value="14:00">14:00</input>
                    <input type="checkbox" name="seans[]"
                      value="15:00">15:00</input>
                    <input type="checkbox" name="seans[]"
                      value="16:00">16:00</input>
                    <input type="checkbox" name="seans[]"
                      value="17:00">17:00</input>
                    <input type="checkbox" name="seans[]"
                      value="18:00">18:00</input>
                    <input type="checkbox" name="seans[]"
                      value="19:00">19:00</input>
                    <input type="checkbox" name="seans[]"
                      value="20:00">20:00</input>
                    <input type="checkbox" name="seans[]"
                      value="21:00">21:00</input>
                    <input type="checkbox" name="seans[]"
                      value="22:00">22:00</input>
                  </div>
                  <div class="tarih">
                    <h4>Vizyona giriş tarihi belirtiniz.</h4>
                      <input type="date" style="border-radius:1px; margin-left:10px;" name="dateofbirth" id="dateofbirth">
                  </div><br>
              </div>
           </div>
          </div>
          <button class="btn btn_default" name="vizyon_film_ekle" style="margin-left:215px;">Gösteri ekle</button>
        </form>
    </div>
    <div class="col-md-4">
    </div>
  </body>
</html>
