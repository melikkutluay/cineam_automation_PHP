<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cinema";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT musteri_id, e_mail, parola FROM musteriler";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["musteri_id"]. " - Name: ". $row["e_mail"]. " " . $row["parola"] . "<br>";
      //  if ($email==$row["e_mail"] && $parola==$row["parola"]) {
          echo "login_bakmak_icin";
        //  }
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
