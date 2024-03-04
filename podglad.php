<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/chrupek.png">
    <title>CHRUPINGO</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="scripts/main.js"></script>
</head>
<body>    
    <main id="main">
        <h1>CHRUPINGO</h1>
        <h2 id="info">Kliknij w odpowiednie pole gdy coś zauwarzysz:</h2>
        <table>
            <tr>
                <td id="col1" class="niezaznaczone" onclick="clicked(this.id)"></td>
                <td id="col2" class="niezaznaczone" onclick="clicked(this.id)">Wejście do klasy z energolem</td>
                <td id="col3" class="niezaznaczone" onclick="clicked(this.id)">Spanko na lekcji</td>
            </tr>
            <tr>
                <td id="col4" class="niezaznaczone" onclick="clicked(this.id)">Dasz książke?</td>
                <td id="col5" class="niezaznaczone" onclick="clicked(this.id)">Speed run jedynki</td>
                <td id="col6" class="niezaznaczone" onclick="clicked(this.id)">Wejscie w kurtce i butach</td>
            </tr>
            <tr>
                <td id="col7" class="niezaznaczone" onclick="clicked(this.id)">Spóźnienie 15 minut</td>
                <td id="col8" class="niezaznaczone" onclick="clicked(this.id)">Skip lekcji</td>
                <td id="col9" class="niezaznaczone" onclick="clicked(this.id)">Siedzenie na telefonie</td>
            </tr>
        </table>
        <?php 
            include "load_predicts.php";
        ?>
    </main>
    
</body>
</html>
