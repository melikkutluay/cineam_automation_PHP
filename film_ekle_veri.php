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
  $film_link=$_GET['film_link'];
  $film_ad=$_GET['film_adi'];
  $film_sure=$_GET['film_suresi'];
  $film_fiyat=$_GET['film_fiyati'];
}
    if (empty($film_link && $film_ad && $film_sure && $film_fiyat)) {
      echo "Formda boş alan vulunmaktadır!";
    }
    else {
      $sql_film = "INSERT INTO filmler (film_resim,film_adi,film_suresi,film_fiyati)
      VALUES ('".$film_link."','".$film_ad."','".$film_sure."','".$film_fiyat."')";
      if (mysqli_query($conn, $sql_film)) {
            echo "film veri tabanına başarıyla  kaydedildi.";
            session_start();     //sayfada creat buton ile home .php ye geçme
            $_SESSION['oturum'] = true;
            header("Location: film_ekle.php");
        }
        else {

          echo "Bir hata oluştu";
        }
    }

 ?>
