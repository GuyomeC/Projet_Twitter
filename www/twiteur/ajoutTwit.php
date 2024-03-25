<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="datatwiteur.php" method="POST">
        <input type="hidden" name="form" value="ajoutTwit">

        <label for="twit">Ajouter un Twit</label>
        <input type="text" name="twit" id="twit">
        <div class="p-Top-Bot">
            <input type="submit" value="Publier" name="publish">
        </div>
    </form>

    <?php 

    try {

    $bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
    } catch(PDOException $e) {
        die('Site Indisponible');
    }

    $order = isset($_GET['order']) && $_GET['order'] == 'asc' ? 'ASC' : 'DESC';
    $user_id = isset($_GET['user_id']) ? (int)$_GET['user_id'] : null;

    if ($user_id !== null) {
        $req = $bdd->prepare("SELECT twit.id, twit.contenu, twit.createdAt, user.nom FROM twit INNER JOIN user ON twit.user_id = user.id WHERE twit.user_id = :user_id ORDER BY twit.createdAt $order");
        $req->execute(array('user_id' => $user_id));
    } else {
        $req = $bdd->prepare("SELECT twit.id, twit.contenu, twit.createdAt, user.nom FROM twit INNER JOIN user ON twit.user_id = user.id ORDER BY twit.createdAt $order");
        $req->execute();
    }
    ?>
    <div class="flex p-Top">
    <?php
    while ($row = $req->fetch()) {
        echo "<div class='tweet' style='border: 1px solid rgb(56, 132, 255); margin-bottom: 10px; padding: 10px;'>";
        echo "<h2>Tweetos Name : " . $row['nom'] . "</h2>";
        echo "<p>" . $row['contenu'] . "</p>";
        echo "<p style='font-size: 0.8em; color: #888;'>Posté le : " . $row['createdAt'] . "</p>";
        echo "<form action='delete_tweet.php' method='POST'>";
        echo "<input type='hidden' name='tweet_id' value='" . $row['id'] . "'>";
        echo "<input type='submit' value='Supprimer'>";
        echo "</form>";
        echo "</div>";
    }
    ?>
    </div>

</body>
</html>