<?php
$conn = mysqli_connect('web07.bero-host.de', 'pascal', 'mausmann1fabioadmin','minecraftserver');

// Check connection
if ($conn->connect_error) {
  die("Verbindung erfolgreich: " . $conn->connect_error);
} else {
    echo "<script>console.log('Mit MySQL erfolgreich verbunden');</script>";
}
?>