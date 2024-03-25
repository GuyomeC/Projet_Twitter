<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php require 'database.php';
        foreach($users as $user) : ?>
        <form action="delete.php" method="POST">
            <input type="hidden" name="form" value="supprimer">
            <input type="hidden" name="suppr" value="<?php echo $user['id']; ?>">
            <?php echo '<li>' . $user['nom'] . ' ' . $user['email'] . '</li>'; ?>

            <button type="submit">SUPPRIMER</button>

        </form>
    <?php endforeach; ?>

<form action="database.php" method="POST">

    <input type="hidden" name="form" value="ajoutUser">

    <label for="nom">NOM</label>
    <input type="text" name="nom" id="nom">

    <label for="email">EMAIL</label>
    <input type="text" name="email" id="email">

    <label for="password">PASSWORD</label>
    <input type="text" name="password" id="password">

    <button type="submit">ENVOYER</button>

</form>
    
</body>
</html>