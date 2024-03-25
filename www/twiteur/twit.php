<?php 

try {

$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
} catch(PDOException $e) {
    die('Site Indisponible');
}

$req = $bdd->prepare("SELECT contenu FROM twit ORDER BY id");
$req->execute();
$rep = $req->fetchAll();

?>