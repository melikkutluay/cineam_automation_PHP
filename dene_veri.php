  <?php
  if (isset($_POST)) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cinema";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
  }
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/cover.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="bootstrap/css/home.css">
   <link rel="stylesheet" href="bootstrap/css/like.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title></title>
  </head>
  <body style="background-color:#333; color: #fff;">
    <div class="col-md-1"></div>
    <div class="col-md-10"><br>
      <?php
      include 'stack_yapisi.php';
      $myMovies = new ReadingList();
      $myRooms  = new ReadingList();
      $j=1;
      $sql_film="SELECT * FROM filmler";
      $result=$conn->query($sql_film);
      if ($result->num_rows>0) {
          while ($row = $result->fetch_assoc()) {
            $filmler_film_id="". $row["film_id"]. "";
            $filmler_film_adi="". $row["film_adi"]. "";
            $filmler_film_imdb="". $row["IMDB"]. "";
            $filmler_film_suresi="". $row["film_suresi"]. "";
            $filmler_film_fiyati="". $row["film_fiyati"]. "";
            $filmler_film_link="". $row["film_resim"]. "";
            $filmBilgiler[$j]=array();
            $filmBilgiler[$j][0]=$filmler_film_id;
            $filmBilgiler[$j][1]=$filmler_film_adi;
            $filmBilgiler[$j][2]=$filmler_film_imdb;
            $filmBilgiler[$j][3]=$filmler_film_suresi;
            $filmBilgiler[$j][4]=$filmler_film_fiyati;
            $filmBilgiler[$j][5]=$filmler_film_link;
            $j=$j+1;
            $dizi1[$j] =$filmler_film_id;
          }
        }
        $m=1;
        $i=0;
        $sql_vizyon_film="SELECT * FROM gosteri";
        $result=$conn->query($sql_vizyon_film);
      if ($result->num_rows>0) {
        while ($row = $result->fetch_assoc())  {
           $gosteriler_gosteri_id="". $row["gosteri_id"]. "";
           $gosteriler_salon_no="". $row["salon_no"]. "";
           $gosteriler_film_id="". $row["film_id"]. "";
           $gosteriler_gosteri_tarih="". $row["gosteri_tarihi"]. "";
           $gosteriler_gosteri_zaman="". $row["gosteri_zamani"]. "";
           $cokBoyutluArray[$i]=array();
           $cokBoyutluArray[$i][0]=$gosteriler_gosteri_id;
           $cokBoyutluArray[$i][1]=$gosteriler_salon_no;
           $cokBoyutluArray[$i][2]=$gosteriler_film_id;
           $cokBoyutluArray[$i][3]=$gosteriler_gosteri_tarih;
           $cokBoyutluArray[$i][4]=$gosteriler_gosteri_zaman;
           $ortak_salon[$m]="". $row["salon_no"]. "";
           $ortak_seans[$m]="". $row["gosteri_zamani"]. "";
           $ortak_id[$m]="". $row["gosteri_id"]. "";
           $ortak_film_id[$m]="". $row["film_id"]. "";
           $myMovies->push($cokBoyutluArray[$i][2]);
           $myRooms ->push($cokBoyutluArray[$i][1]);
           $i=$i+1;
           $m=$m+1;
           $dizi2[$i]= $gosteriler_film_id;
         }
      }
         for ($j=2; $j <= count($dizi1)+1; $j++) {
            for ($i=1; $i <= count($dizi2) ; $i++) {
              if ($dizi1[$j]==$dizi2[$i]) {
                  $film_dizi_adi[$i]=$filmBilgiler[$j-1][1];
                  $film_linki[$i]=$filmBilgiler[$j-1][5];
                  $film_salon_yeri[$i]=$cokBoyutluArray[$i-1][1];
                  $film_gosteri_tarihi[$i]=$cokBoyutluArray[$i-1][3];
                  $film_gosteri_zamani[$i]=$cokBoyutluArray[$i-1][4];
                  ?>
                  <div class="navbar navbar-default" id="film">
                       <div class="col-md-2">
                           <div class=""><a href="">
                             <img src="<?= $film_linki[$i]; ?>" width="150px;"></a>
                           </div>
                       </div>
                       <div class="col-md-8">
                           <div class="pull-left">
                             <h3><?php echo "$film_dizi_adi[$i]"; ?></h3>
                              <div class="pull-left" id="salon_no">Salon<?= $film_salon_yeri[$i]; ?>
                             </div>
                           </div>
                             <div style="margin-left:170px;">
                               <ul  class="pull-left" id="saatler" >
                                  <li  class="btn btn-default" >
                                  <a href="/biletleme/~step~ticket~code~0000000028~session~58639" data-show-time="09" data-next-show-time="<?=  $film_gosteri_tarihi[$i]?> Salı">
                                  <span  class="sessions-display__saloon__session-list__time" ><?= $film_gosteri_zamani[$i]; ?></span>
                                  <span class="sessions-display__saloon__session-list__prop" >2D</span>
                                  </a>
                                </li>
                                 </ul>
                             </div>
                             <div class="" style="margin-top:15px;">
                  <?php
                  for ($b=$i+1; $b <=count($dizi2) ; $b++) {
                     if ($ortak_film_id[$b]==$ortak_film_id[$i] && $ortak_salon[$b]==$ortak_salon[$i]) {
                           ?>
                                    <ul  class="pull-left" id="saatler"  >
                                      <li  class="btn btn-default" >
                                        <a href="/biletleme/~step~ticket~code~0000000028~session~58639" data-show-time="09" data-next-show-time=" Salı">
                                         <span  class="sessions-display__saloon__session-list__time" ><?= $ortak_seans[$b]; ?></span>
                                         <span class="sessions-display__saloon__session-list__prop" >2D</span>
                                       </a>
                                      </li>
                                   </ul>

                                 <br>
                           <?php
                     }
                  }
                  ?></div><?php
                  ?>
                     </div>
                     <div class="col-md-2">

                     </div>
                   </div>
                <?php break;
               }
            }
          }
          $k=1;
            ?>

          </div>
    <div class="col-md-1"></div>
</body>
</html>
