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

  }

?>
