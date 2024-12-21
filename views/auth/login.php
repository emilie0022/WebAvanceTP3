<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="<?php echo '/webAvance/tp3/css/style.css'; ?>">
</head>
<body>
    <?php include __DIR__ . '/../layout/navbar.php'; ?>
    <h1>Connexion</h1>
    <form action="/webAvance/tp3/auth/store" method="POST">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Se connecter</button>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
    </form>
</body>
</html>
