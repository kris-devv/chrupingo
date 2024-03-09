<?php  
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["dalej"])) {
        session_start();

        $_SESSION["name"] = $_POST["name"];
        $name = $_SESSION["name"];

        try {
            require_once 'db_connect.php';
            
            $query = "SELECT * FROM users WHERE name = '$name';";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0) {
                header("Location: podglad.php");
            }else{
                header("Location: predict.php");
            }

        } catch (PDOException $th) {
            session_destroy();
            die("BŁĄD!" . $th->getMessage());
        }
        }
?>