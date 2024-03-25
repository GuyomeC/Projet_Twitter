<?php 

try {

$database = new PDO('mysql:host=localhost;dbname=twitter', 'root', '');
} catch(PDOException $e) {
    die('Site Indisponible');
}

//SELECT * FROM user (recupere toutes les donnees)

$requete = $database->prepare('SELECT id, nom, email FROM user ORDER BY createdAt DESC');
$requete->execute();
$users = $requete->fetchAll(PDO::FETCH_ASSOC);

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'ajoutUser') {
    if ($_POST['nom'] != '' && $_POST['email']) {
        $nouvelUser =[
            'nom' => $_POST['nom'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];

        $requete = $database->prepare("INSERT INTO user (nom, email, password) VALUES (:nom, :email, :password)");


        if ($requete->execute($nouvelUser) ){
            echo 'User bien ajouté';
        } else {
            echo 'Erreur lors de l ajout';
        }

    } else {
        echo "Formulaire imcomplet";
    }
}





?>