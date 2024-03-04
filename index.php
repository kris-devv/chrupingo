<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_index.css">
    <link rel="icon" href="chrupek.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Madimi+One&display=swap" rel="stylesheet">

    <title>CHRUPINGO!</title>
</head>
<body>
    <main>
    <form  action="check.php" id="formularz1" method="post">
    <label for="name">Podaj nick:</label> <br>
    <input type="text" name="name" placeholder="chrupek" id="input1"> <br>
    <button type="submit" class="button-48" name="dalej"><span class="text">DALEJ</span></button>
    <?php if(isset($_GET["error"])) {?>
        <p class="error"> <?php echo $_GET["error"]; ?> </p>
    <?php } ?>
    </form>
    </main>
</body>
</html>
