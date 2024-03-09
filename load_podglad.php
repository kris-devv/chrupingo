<?php
function load_predicts() {

    include "db_connect.php";

    $name = "Krystek";
    $pred = "predict1";


    $query = "SELECT p.name as predict_name, p.czy_sie_stalo FROM users as u, all_predicts as p WHERE u.$pred = p.ID AND u.name = '$name';";
    $result = mysqli_query($conn, $query);

    foreach ($result as $row) {
        echo "" . $row['predict_name'];
    }

    mysqli_close( $conn );
}

?>