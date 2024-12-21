<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="<?php echo '/webAvance/tp3/css/style.css'; ?>">
</head>
<body>
    <?php include __DIR__ . '/../layout/navbar.php'; ?>
    <h1>Inscription</h1>
    <form action="/webAvance/tp3/auth/register/submit" method="POST">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required>
        <label for="confirm_password">Confirmer le mot de passe :</label>
        <input type="password" name="confirm_password" id="confirm_password" required>
        <button type="submit">S'inscrire</button>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
    </form>
</body>
</html>
