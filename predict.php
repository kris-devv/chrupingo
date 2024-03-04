<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="icon" href="logo.png">
    <title>CHRUPINGO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <main id="main">
        <?php 
            include "load_predicts.php";
        ?>
        <form action="load_predicts.php" method="post" id="form">
        <h1>CHRUPINGO</h1>
        <?php if(isset($_GET["error"])) {?>
        <p class="error"> <?php echo $_GET["error"]; ?> </p>
        <?php } ?>
        <h2 id="info">Wybierz swoje predykcje na dzisiejszy dzien:</h2>
        <table>
            <tr>
                <td id="col1" class="niezaznaczone" onclick="clicked(this.id)"><select name="pred1"><?php load_options(); ?></select></td>
                <td id="col2" class="niezaznaczone" onclick="clicked(this.id)"><select name="pred2"><?php load_options(); ?></select></td>
                <td id="col3" class="niezaznaczone" onclick="clicked(this.id)"><select name="pred3"><?php load_options(); ?></select></td>
            </tr>
            <tr>
                <td id="col4" class="niezaznaczone" onclick="clicked(this.id)"><select name="pred4"><?php load_options(); ?></select></td>
                <td id="col5" class="niezaznaczone" onclick="clicked(this.id)"><select name="pred5"><?php load_options(); ?></select></td>
                <td id="col6" class="niezaznaczone" onclick="clicked(this.id)"><select name="pred6"><?php load_options(); ?></select></td>
            </tr>
            <tr>
                <td id="col7" class="niezaznaczone" onclick="clicked(this.id)"><select name="pred7"><?php load_options(); ?></select></td>
                <td id="col8" class="niezaznaczone" onclick="clicked(this.id)"><select name="pred8"><?php load_options(); ?></select></td>
                <td id="col9" class="niezaznaczone" onclick="clicked(this.id)"><select name="pred9"><?php load_options(); ?></select></td>
            </tr>
        </table>
        <?php echo '<input type="hidden" name="name" value="' . $_GET["name"] . '">' ?>
        <input type="submit" name="save" value="Zatwierdz" id="saveButton">
        </form>
    </main>
    
</body>
</html>
