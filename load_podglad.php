<?php
session_start();
function load_predicts() {

    include "db_connect.php";

    $name =  $_SESSION["name"];

    // Sprawdzanie czy 'pred_num' istenieje w sesji i czy nie jest większy niż 9 - jest tylko 9 predictów w bazie
    if(!isset($_SESSION["pred_num"]) or $_SESSION["pred_num"] > 9) {
        $_SESSION["pred_num"] = 1;
    } 

    // Dołącznie numeru do 'predict'
    $pred = "predict" . $_SESSION["pred_num"];

    // Zwraca 'predict_name' i boolean 'czy_sie_stalo' predictu przypisanego wyżej
    $query = "SELECT p.name as predict_name, p.czy_sie_stalo FROM users as u, all_predicts as p WHERE u.$pred = p.ID AND u.name = '$name';";
    $result = mysqli_query($conn, $query);

    foreach ($result as $row) {
        echo "" . $row['predict_name'];
    }
    
    $_SESSION["pred_num"]++;
    mysqli_close( $conn );
}

?>