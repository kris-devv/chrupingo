<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="icon" href="img/chrupek.png">
    <meta charset="UTF-8">
    <meta name="description" content="CHRUPINGO BINGO!">
    <meta name="keywords" content="bingo, chrupingo, chrupcala">
    <meta name="author" content="Krystian Figiela, Patryk Lipiński">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Madimi+One&display=swap" rel="stylesheet">

    <title>CHRUPINGO!</title>
</head>
<body>
    <main>
    <form  action="check.php" id="formularz1" method="post">
    <?php if(isset($_GET["error"])) {?>
        <p class="error"> <?php echo $_GET["error"]; ?> </p>
    <?php } ?>
    <label for="name">Podaj nick:</label> <br>
    <input type="text" name="name" placeholder="chrupek" id="input1"> <br>
    <button type="submit" class="button-48" name="dalej"><span class="text">DALEJ</span></button>
    <!-- TODO: Dodaj przycisk graj jako gość -->
    </form>
    <p id="wersja">V.0.1</p>
    <div id="githubs">
        <a href="githubs.html">
            <img src="img/github-mark.png" alt="Github Link" height="100px" width="100px">
        </a>
    </div>
    </main>
</body>
</html>
