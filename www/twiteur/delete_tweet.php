<?php 

try {

$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
} catch(PDOException $e) {
    die('Site Indisponible');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tweet_id = $_POST['tweet_id'];
    $req = $bdd->prepare("DELETE FROM twit WHERE id = :tweet_id");
    $req->execute(array('tweet_id' => $tweet_id));
}

header('Location: index.php'); // Redirige l'utilisateur vers la page d'accueil

?>