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
if ($_SERVER["REQUEST_METHOD"]=="GET") {
  $salon_no=$_GET['salon_numarasi'];
  $film_no=$_GET['film_numarasi'];
  $gosteri_tarih=$_GET['dateofbirth'];
  }
  $bugun=getdate();
  if (!empty($_GET['seans'])) {
    foreach($_GET['seans'] as $values)
  	{
  		//echo $values;
  	}
    $gosteri_zaman=$_GET['seans'];
  }

if (empty($salon_no && $film_no && $gosteri_tarih && $gosteri_zaman)) {
  echo "Boş inputlarınız var!";
}
  else {
    if ($salon_no >= 1 && $salon_no <= 6) {
      /*if ($gosteri_tarih>=$bugun) {
      */$sql_vizyon="INSERT INTO gosteri (salon_no,film_id,gosteri_tarihi,gosteri_zamani)
      VALUES ('".$salon_no."','".$film_no."','".$gosteri_tarih."','".$values."')";
      if (mysqli_query($conn, $sql_vizyon)) {
            echo "vizyon filmi veri tabanına başarıyla  kaydedildi.";
        }
    /*}*/
    else{
      echo "tarih seçimi geçmiş".'</p>';
    }
    }
    else {
      echo "sınırın dışına çıktınız";
    }
  }
 ?>
