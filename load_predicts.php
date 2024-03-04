<?php 

if(isset($_POST["save"])) {
    // TODO: Pytanie czy napewno chce zatwierdzić predicty
    include "db_connect.php";

    $name = $_POST["name"]; 
    $pred1 = $_POST["pred1"];
    $pred2 = $_POST["pred2"];
    $pred3 = $_POST["pred3"];
    $pred4 = $_POST["pred4"];
    $pred5 = $_POST["pred5"];
    $pred6 = $_POST["pred6"];
    $pred7 = $_POST["pred7"];
    $pred8 = $_POST["pred8"];
    $pred9 = $_POST["pred9"];

    if ($pred1 == 0 or $pred2 == 0 or $pred3 == 0 or $pred4 == 0 or $pred5 == 0 or $pred6 == 0 or $pred7 == 0 or $pred8 == 0 or $pred9 == 0) {
        // TODO: Po kliknięciu przycisku wszystko się usuwa, trzba to ogarnąć
        header("Location: predict.php?name=". $name ."&error=Nie zaznaczyłeś wszystkich predykcji.");
    } else {
        // TODO: Sprawdź czy predicty się nie powtarzają
        // Jeżeli tak to error
        // Jeżeli nie to zapisanie do bazy i przekierowanie do podglad.php
        $sql = "INSERT INTO users (name, predict1, predict2, predict3, predict4, predict5, predict6, predict7, predict8, predict9) 
        VALUES ('$name', '$pred1', '$pred2', '$pred3', '$pred4', '$pred5', '$pred6', '$pred7', '$pred8', '$pred9')";
                
        if($conn->query($sql) == TRUE) {
            header("Location: podglad.php?name=" . $name);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }$conn->close();
    }
}

function load_options() {

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