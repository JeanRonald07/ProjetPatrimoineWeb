<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?> 


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Patrimoine</title>
</head>
<body>
    <h1>Connexion</h1>

    <?php if (isset($messageErreur)): ?>
        <p style="color: red;"><?php echo $messageErreur; ?></p>
    <?php endif; ?>

    <form method="post" action="index.php?controller=connexion">
        <label for="login">Identifiant:</label>
        <input type="text" id="login" name="login" required><br><br>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>


