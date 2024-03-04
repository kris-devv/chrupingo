<?php  

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["dalej"])) {

        $name = $_POST["name"];

        try {
            require_once 'db_connect.php';
            
            $query = "SELECT * FROM users WHERE name = '$name';";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0) {
                header("Location: podglad.php?name=$name");
            }else{
                header("Location: predict.php?name=$name");
            }

        } catch (PDOException $th) {
            die("BŁĄD!" . $th->getMessage());
        }
        }
?>