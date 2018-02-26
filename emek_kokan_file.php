<div class="navbar navbar-default">
  <div class="col-md-2">
      <div class=""><a href="">
        <img src="<?= $film_linki[$k]; ?>" alt="" width="150px;"></a>
      </div>
  </div>
  <div class="col-md-8">
    <div class="pull-left">
       <h3><?php echo "$film_dizi_adi[$k]"?></h3>
      <div class="pull-left" id="salon_no=" >Salon <?= $film_salon_yeri[$k]; ?></div>
    </div>
  <?php
for ($l=1; $l <=$result->num_rows ; $l++) {
  for ($i=$l+1; $i < $result->num_rows+1; $i++) {
    if ($ortak_film_id[$l]==$ortak_film_id[$i] && $ortak_salon[$l]==$ortak_salon[$i]) { //Not if'in yerin de problem var buraya tekrak bakman gerekicek hatırla
      $ortak_sonEleman_seans[$k]=$ortak_seans[$i];
      $ortak_sonEleman_salon[$k]=$ortak_salon[$i];
      $k++;
          ?>
              <div class="" style="margin-left:200px;">
                   <ul  class="pull-left" id="saatler" >
                     <li  class="btn btn-default" >
                       <a href="/biletleme/~step~ticket~code~0000000028~session~58639" data-show-time="09" data-next-show-time=" Salı">
                        <span  class="sessions-display__saloon__session-list__time" ><?= $ortak_seans[$l]; ?></span>
                        <span class="sessions-display__saloon__session-list__prop" >2D</span>
                      </a>
                     </li>
                  </ul>
                </div>
                <br>
          <?php break;
      }
    }
  }
  $k=$k-1;
?>
<div class="" style="margin-left:50px;">
<ul class="pull-left" id="saatler">
<li  class="btn btn-default" >
  <a href="/biletleme/~step~ticket~code~0000000028~session~58639" data-show-time="09" data-next-show-time=" Salı">
    <span  class="sessions-display__saloon__session-list__time" ><?= $ortak_sonEleman_seans[$k]; ?></span>
  <span class="sessions-display__saloon__session-list__prop" >2D</span>
  </a>
</li>
</ul>
</div>
</div>
</div><div class="navbar navbar-default">
  <div class="col-md-2">
      <div class=""><a href="">
        <img src="<?= $film_linki[$k]; ?>" alt="" width="150px;"></a>
      </div>
  </div>
  <div class="col-md-8">
    <div class="pull-left">
       <h3><?php echo "$film_dizi_adi[$k]"?></h3>
      <div class="pull-left" id="salon_no=" >Salon <?= $film_salon_yeri[$k]; ?></div>
    </div>
  <?php
for ($l=1; $l <=$result->num_rows ; $l++) {
  for ($i=$l+1; $i < $result->num_rows+1; $i++) {
    if ($ortak_film_id[$l]==$ortak_film_id[$i] && $ortak_salon[$l]==$ortak_salon[$i]) { //Not if'in yerin de problem var buraya tekrak bakman gerekicek hatırla
      $ortak_sonEleman_seans[$k]=$ortak_seans[$i];
      $ortak_sonEleman_salon[$k]=$ortak_salon[$i];
      $k++;
          ?>
              <div class="" style="margin-left:200px;">
                   <ul  class="pull-left" id="saatler" >
                     <li  class="btn btn-default" >
                       <a href="/biletleme/~step~ticket~code~0000000028~session~58639" data-show-time="09" data-next-show-time=" Salı">
                        <span  class="sessions-display__saloon__session-list__time" ><?= $ortak_seans[$l]; ?></span>
                        <span class="sessions-display__saloon__session-list__prop" >2D</span>
                      </a>
                     </li>
                  </ul>
                </div>
                <br>
          <?php break;
      }
    }
  }
  $k=$k-1;
?>
<div class="" style="margin-left:50px;">
<ul class="pull-left" id="saatler">
<li  class="btn btn-default" >
  <a href="/biletleme/~step~ticket~code~0000000028~session~58639" data-show-time="09" data-next-show-time=" Salı">
    <span  class="sessions-display__saloon__session-list__time" ><?= $ortak_sonEleman_seans[$k]; ?></span>
  <span class="sessions-display__saloon__session-list__prop" >2D</span>
  </a>
</li>
</ul>
</div>
</div>
</div>
