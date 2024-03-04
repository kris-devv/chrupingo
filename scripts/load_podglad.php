<?php

function load_predicts() {

    include "db_connect.php";

    $query = "SELECT * FROM all_predicts";
    $result = mysqli_query($conn, $query);

    echo '<option value="0"></option>';
    foreach ($result as $row) {
        echo '<option value="' . $row['ID'] . '">' . $row['name'] . '</option>';
    }

    mysqli_close( $conn );
}

?>