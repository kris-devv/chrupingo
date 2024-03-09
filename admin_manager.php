<?php 
session_start();

if($_SESSION["name"] != "dzikiwonsz") {
    header('Location: index.php');
} 

if(isset($_POST["save"])) {

    include "db_connect.php";

    $query = "SELECT COUNT(ID) AS num FROM all_predicts;";
    $result = mysqli_query($conn, $query);

    foreach($result as $row) {
        $num =  $row["num"];
    }

    for($i = 1; $i <= $num; $i++) {
        $czy_stalo = $_POST['pred'.$i];
        $query = "UPDATE all_predicts SET czy_sie_stalo = $czy_stalo WHERE ID = $i;";

        if($conn->query($query) == TRUE) {
            echo $i . " - succes";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }

    header("Location: adminpanel.php");
    mysqli_close( $conn );
}

function load_all_predicts() {

    include "db_connect.php";

    $query = "SELECT * FROM all_predicts";
    $result = mysqli_query($conn, $query);

    // Wygenerowanie opcji do selecta html

    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td><select name='pred".$row["ID"]."'>";
        echo "<option value='0'>Nie stało się</option>";
        if($row["czy_sie_stalo"] == 1) {
            echo "<option value='1' selected>Stało się</option>";
        } else {
            echo "<option value='1'>Stało się</option>";
        }
        echo "</select></td>";
        echo "</tr>";
    }

    mysqli_close( $conn );
}

?>