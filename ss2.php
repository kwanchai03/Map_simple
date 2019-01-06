<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dada";

$name = $_POST['latitude'];
$Nick = $_POST['longitude'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn,"utf8");

$sql = "INSERT  IGNORE INTO rl(ranel, rarara, date_a,tt)
VALUES ('$name', '$Nick','".date('Y-m-d')."',now())";

if (mysqli_query($conn, $sql)) {
   
    echo "<meta http-equiv='refresh' content='2;url=https://www.google.co.th/'/>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>