<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twiteur</title>
    <link rel="stylesheet" href="stylet.php" media="screen">
</head>
<body>

    <?php
    require 'menu.template.php';
    ?>

    <main>
    <form action="index.php" method="GET">
        <label for="user_id">Voir les tweets de l'utilisateur :</label>
        <input type="number" id="user_id" name="user_id">
        <input type="submit" value="Voir les tweets">
    </form>
    <a href="?order=asc">Afficher les tweets du plus ancien au plus récent</a>
    <a href="?order=desc">Afficher les tweets du plus récent au plus ancien</a>
        <?php
        require 'ajoutTwit.php';
        ?>

    </main>

    <footer>
        <?php
        require 'inscription.php';
        ?>
    </footer>
    
</body>
</html>