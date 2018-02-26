<?php
  if (isset($_POST['isim'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cinema";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
  //form verilerini çekme
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $ad = $_POST['isim'];
      $soyad=$_POST['soyisim'];
      $e_mail=$_POST['email'];
      $telefon_no=$_POST['telefon_no'];
      $parola=md5($_POST['parola']);
      $r_parola=md5($_POST['parola_tekrar']);
  }

  $mesaj="<script>alert('New record created successfully')</script>";
  $mesaj_2="<script>alert('Boş alan bulunmaktadır')</script>";
  $mesaj_1="<script>alert('Şifre doğrulanmadı')</script>";
  if ($parola!==$r_parola) {
   echo "$mesaj_1";
  }
  else {

  if (empty($ad && $soyad && $e_mail && $parola && $r_parola)) {
    echo "$mesaj_2";
  }
  else {
    $sql = "INSERT INTO musteriler (musteri_adi ,musteri_soyadi ,e_mail,telefon_no ,parola ,parola_tekrar)
    VALUES ('".$ad."','".$soyad."','".$e_mail."','".$telefon_no."','".$parola."','".$r_parola."')";
    if (mysqli_query($conn, $sql)) {
        echo "$mesaj";

        session_start();     //sayfada creat buton ile home .php ye geçme
        $_SESSION['oturum'] = true;
        header("Location: home.php");
      }
     else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    mysqli_close($conn);
     }
  }
}
?>
