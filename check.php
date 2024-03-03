<?php  

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["dalej"])) {
        $name = $_POST["name"];

        if(empty($name)) {
            header("Location: glowna.php?error=Nie podałes nazwy.");
            exit();
        }

        // TODO: Sprawdzanie czy użytkownik istnieje w bazie

        // Jeżeli tak to przekierowanie do podglad.php
        header("Location: predict.php?name=" . $name);

        // Jeżeli nie to przekierowanie do predict.php
        // header("Location: predict.php");
    }
?>