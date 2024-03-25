<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
}
catch(PDOException $e) {
    die('Site Indisponible');
}

if(isset($_POST['ok'])){
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $requete = $bdd->prepare("INSERT INTO user VALUES (0, :email, :password, :nom)");
    $requete->execute(
        array(
            "nom" => $nom,
            "email" => $email,
            "password" => $password
        )
    );
    header("Location: index.php");
}
?>