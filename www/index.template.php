<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 7Rece7 </title>
    <link rel="stylesheet" href="style.php" media="screen">
</head>
<body>

    
    <?php
    require 'menu.template.php';
    require 'index_code.php';
    ?>

    <main>
        <h1> 7 Rece7 </h1>
        <?php
        // echo '<pre>';
        // var_dump($recette);
        // echo '</pre>';
        echo '<div class="menu">';
        echo '<div class="recette">';
        echo '<p>';
        echo '<a href="recette1">' ;
        echo $recette[0]['Titre'];
        echo '</a>';
        echo '</p>';
        echo '<p>';
        echo $recette[0]['Description'];
        echo '</p>';
        echo '<p>';
        echo 'Difficulté : ' . $recette[0]['Difficulté'];
        echo '<p>';
        echo '<p>';
        echo $recette[0]['Temps'] . ' minutes';
        echo '</p>';
        echo '<p>';
        echo 'Regime ' . $recette[0]['Regime'];
        echo '</p>';
        echo '<p>';
        echo $recette[0]['image'];
        echo '</p>';
        echo '</div>';
        echo '<div class="recette">';
        echo '<p>';
        echo '<a href="recette1">' ;
        echo $recette[1]['Titre'];
        echo '</a>';
        echo '</p>';
        echo '<p>';
        echo $recette[1]['Description'];
        echo '</p>';
        echo '<p>';
        echo 'Difficulté : ' . $recette[1]['Difficulté'];
        echo '<p>';
        echo '<p>';
        echo $recette[1]['Temps'] . ' minutes';
        echo '</p>';
        echo '<p>';
        echo 'Regime ' . $recette[1]['Regime'];
        echo '</p>';
        echo '<p>';
        echo $recette[1]['image'];
        echo '</p>';
        echo '</div>';
        echo '</div>';
        ?>
    </main>

    <footer>

    <?php
    require 'ajout-user.php';
    ?>

    </footer>
    
</body>
</html>