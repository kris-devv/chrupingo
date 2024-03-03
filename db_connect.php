<?php 

$conn = mysqli_connect("54.38.50.59", "www13516_baza", "AWRsLZat6spXYChfgVuf", "www13516_baza");

if (!$conn) {
    die("Conn failed". mysqli_connect_error());
} else {
    echo "Connected successfully";
}

?>