<?php
if (isset($_POST['isim'])) {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cinema";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  mysql_select_db($veritabani,$conn);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $e_mail=$_POST['email'];
      $parola=md5($_POST['parola']);

  }
  $conn = mysqli_connect("localhost", "root", "", "cinema");
  if (isset($_POST['login_user'])) {


    //  $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT musteri_id, e_mail, parola FROM musteriler";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            //  echo "<br> id: ". $row["musteri_id"]. " - Name: ". $row["e_mail"]. " " . $row["parola"] . "<br>";
              $bagli_email="". $row["e_mail"]. "";
              if ($e_mail==$bagli_email ) {
                $bagli_parola="". $row["parola"]. "";
                echo "giriş yapmak için hazırız";
                {
                  session_start();     //sayfada creat buton ile home .php ye geçme
                  $_SESSION['oturum'] = true;
                  header("Location: home.php");
                }
                }
          }
      } else {
          echo "0 results";
      }

      $conn->close();
  }
?>
