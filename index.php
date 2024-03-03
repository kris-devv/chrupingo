<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="glowna.php" method="post">
    <?php if(isset($_GET["error"])) {?>
        <p class="error"> <?php echo $_GET["error"]; ?> </p>
    <?php } ?>
    <label for="name">Podaj nazwę:</label> <br>
    <input type="text" name="name" placeholder="chrupek"> <br>
    <input type="submit" name="dalej" value="Dalej"> <br>
    </form>

    <?php include "check.php"; ?>
</body>
</html>