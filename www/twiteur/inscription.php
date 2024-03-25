<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    
<form method="POST" action="traitement.php">

    <label class="p-Top" for="nom">NOM</label>
    <input type="text" name="nom" id="nom" placeholder="Entrez votre nom">
    <br />
    <label for="email">EMAIL</label>
    <input type="text" name="email" id="email" placeholder="Entrez votre email">
    <br />
    <label for="password">PASSWORD</label>
    <input type="text" name="password" id="password" placeholder="Entrez votre mot de passe">
    <br />
    <div class="p-Top-Bot">
        <input type="submit" value="M'inscrire" name="ok">
    </div>

</form>



</body>
</html>