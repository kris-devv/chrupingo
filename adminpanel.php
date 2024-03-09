<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/chrupek.png">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include "admin_manager.php"; ?>

    <main id="main">
    <form action="admin_manager.php" method="post" id="change_actions">
    <h1>Admin Panel</h1>
    <table><?php load_all_predicts(); ?></table>
    <input type="submit" name="save" value="Zatwierdz" id="saveButton">
    <!-- TODO: Dodaj przycisk reset - do resetu wczystkich czy_sie_stalo -->
    </form>
    </main>
    
</body>
</html>