<?php 

try {

$database = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
} catch(PDOException $e) {
    die('Site Indisponible');
}

if(isset($_POST['publish'])) {
    $nvTwit = $_POST['twit'];

    $requete = $database->prepare("INSERT INTO twit (contenu, user_id) VALUES (:twit, 1)");

    $requete->execute(
        array(
            "twit" => $nvTwit
        )
    );
    header("Location: index.php");
}



?>