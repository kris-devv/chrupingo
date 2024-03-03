<?php 

echo $_GET["name"];

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["save"])) {
    include "db_connect.php";

    $pred1 = $_POST["pred1"];
    $pred2 = $_POST["pred2"];
    $pred3 = $_POST["pred3"];
    $pred4 = $_POST["pred4"];
    $pred5 = $_POST["pred5"];
    $pred6 = $_POST["pred6"];
    $pred7 = $_POST["pred7"];
    $pred8 = $_POST["pred8"];
    $pred9 = $_POST["pred9"];


    echo $name;
    //echo " ".$pred1." ".$pred2." ".$pred3." ".$pred4." ".$pred5." ".$pred6." ".$pred7." ".$pred8;


    // TODO: Sprawdź czy selecty nie są puste
    // Jeżeli są to error
    // Jeżeli nie to zapisanie do bazy i przekierowanie do podglad.php
}

//$name = $_POST["name"]; // Nwm czy to działa

//$query = "select * from users where user_name = {$name};";
//$result = mysqli_query($conn, $query);


//mysqli_close($conn);

function load_options() {
    $mylist = array(
        array(1, "jeden"),
        array(2, "dwa"),
        array(3, "trzy")
    );

    foreach ($mylist as $row) {
        echo '<option value="' . $row[0] . '">' . $row[1] . '</option>';
    }
}

?>