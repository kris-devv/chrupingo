<?php 
    require_once '../other/db_info.php';
    $conn = mysqli_connect($ip, $user, $paswd, $name);

    if (!$conn) {
        die("Conn failed". mysqli_connect_error());
    } else {
        echo "Connected successfully <br>";
    }
?>